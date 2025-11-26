import { Button } from '@/components/ui/button';
import { Plus, Edit2 } from 'lucide-react';
import { Dialog, DialogClose, DialogFooter, DialogContent, DialogDescription, DialogTitle, DialogTrigger } from '@/components/ui/dialog';
import { useState } from 'react';
import axios, { AxiosError } from 'axios';
import { ToastViewport, ToastProvider, Toast, ToastTitle, ToastDescription, ToastAction } from '../ui/toast';
import { IClient } from '@/interfaces/client';
import '@/style/modal.css';

interface ClientFormProps {
    mode: 'create' | 'edit';
    client?: IClient;
}

export default function ClientForm({ mode, client }: ClientFormProps) {
    const [name, setName] = useState(client?.name || '');
    const [order, setOrder] = useState(client?.order || 0);
    const [photo, setPhoto] = useState<File | null>(null);
    const [toastOpen, setToastOpen] = useState(false);
    const [toastMessage, setToastMessage] = useState('');
    const [isError, setIsError] = useState(false);
    const [isDialogOpen, setIsDialogOpen] = useState(false);

    const handleSubmit = async (e: React.FormEvent) => {
        e.preventDefault();
        if (photo && photo.size > 10 * 1024 * 1024) { // Check if photo exceeds 10MB
            setToastMessage('Photo size must not exceed 10MB.');
            setIsError(true);
            setToastOpen(true);
            return;
        }
        try {
            const formData = new FormData();
            formData.append('name', name);
            formData.append('order', order.toString());
            if (photo) {
                formData.append('photo', photo);
            }

            const url = mode === 'create'
                ? '/admin/clients/store'
                : `/admin/clients/update/${client?.id}`;

            await axios.post(url, formData);

            setToastMessage(`Client ${mode === 'create' ? 'Created' : 'Updated'} successfully`);
            setIsError(false);
            setToastOpen(true);
            window.location.reload();
        } catch (error) {
            const axiosError = error as AxiosError<{ message: string }>;
            const message = axiosError.response?.data?.message || `Error ${mode === 'create' ? 'creating' : 'updating'} client`;
            setToastMessage(message);
            setIsError(true);
            setToastOpen(true);
        }
    };

    return (
        <ToastProvider>
            <div>
                <div className="space-y-6">
                    <Dialog open={isDialogOpen} onOpenChange={setIsDialogOpen}>
                        <DialogTrigger asChild>
                            <Button
                                color="blue"
                                variant={mode === 'create' ? "destructive" : "default"}
                                className='cursor-pointer'
                                onClick={() => setIsDialogOpen(true)}
                            >
                                {mode === 'create' ? <Plus /> : <Edit2 />}
                                {mode === 'create' ? 'Create Client' : 'Edit'}
                            </Button>
                        </DialogTrigger>
                        <DialogContent
                            className="DialogContent"
                            onInteractOutside={(e) => {
                                e.preventDefault();
                            }}
                        >
                            <DialogTitle>
                                {mode === 'create' ? 'Create' : 'Edit'} Client
                            </DialogTitle>
                            <DialogDescription asChild>
                                <span className="text-muted-foreground text-sm">
                                    {mode === 'create' ? 'Fill in the client details below' : 'Update the client details below'}
                                </span>
                            </DialogDescription>

                            <form onSubmit={handleSubmit}>
                                <div className="flex flex-col space-y-4">
                                    <div className="flex flex-col space-y-2">
                                        <label className="text-sm text-gray-600" htmlFor="name">Name</label>
                                        <input
                                            type="text"
                                            id="name"
                                            placeholder="Enter name"
                                            className="w-full p-2 border border-gray-300 rounded-md"
                                            value={name}
                                            onChange={(e) => setName(e.target.value)}
                                        />
                                    </div>
                                    <div className="flex flex-col space-y-2">
                                        <label className="text-sm text-gray-600" htmlFor="order">Display Order</label>
                                        <input
                                            type="number"
                                            id="order"
                                            placeholder="Enter order"
                                            className="w-full p-2 border border-gray-300 rounded-md"
                                            value={order}
                                            onChange={(e) => setOrder(parseInt(e.target.value))}
                                        />
                                    </div>
                                    <div className="flex flex-col space-y-2">
                                        <label className="text-sm text-gray-600" htmlFor="photo">Image</label>
                                        <input
                                            type="file"
                                            id="photo"
                                            className="w-full p-2 border border-gray-300 rounded-md"
                                            onChange={(e) => {
                                                if (e.target.files) {
                                                    setPhoto(e.target.files[0]);
                                                }
                                            }}
                                        />
                                        {photo ? (
                                            <img src={URL.createObjectURL(photo)} alt={name} className="mt-2 w-50 h-50 object-cover rounded-md" />
                                        ) : client?.media?.[0]?.original_url ? (
                                            <img src={client.media[0].original_url} alt={name} className="mt-2 w-50 h-50 object-cover rounded-md" />
                                        ) : (
                                            <p>No image available</p>
                                        )}
                                    </div>

                                </div>
                                <DialogFooter className="gap-2 mt-3">
                                    <DialogClose asChild>
                                        <Button variant="outline" className='cursor-pointer'>
                                            Cancel
                                        </Button>
                                    </DialogClose>
                                    {(mode == 'edit') && (
                                        <Button type="submit" className='cursor-pointer' color='blue' variant={'destructive'}>
                                            Update
                                        </Button>
                                    )}
                                    {(mode == 'create') && (
                                        <Button type="submit" className='cursor-pointer' color='blue' variant={'destructive'}>
                                            Create
                                        </Button>
                                    )}
                                </DialogFooter>
                            </form>
                        </DialogContent>
                    </Dialog>
                </div>

                <Toast open={toastOpen} onOpenChange={setToastOpen} className={isError ? 'bg-red-500 text-white' : 'bg-green-500 text-white'}>
                    <ToastTitle>{isError ? 'Error' : 'Success'}</ToastTitle>
                    <ToastDescription>{toastMessage}</ToastDescription>
                    <ToastAction altText="Close" onClick={() => setToastOpen(false)}>Close</ToastAction>
                </Toast>
                <ToastViewport />
            </div>
        </ToastProvider>
    );
}
