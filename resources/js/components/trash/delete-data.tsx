import { Button } from '@/components/ui/button';
import { DeleteIcon } from 'lucide-react';
import { Dialog, DialogClose, DialogFooter, DialogContent, DialogDescription, DialogTitle, DialogTrigger } from '@/components/ui/dialog';
import '@/style/blog.css'
import axios from 'axios';
import { useState } from 'react';
import { ToastViewport, ToastProvider, Toast, ToastTitle, ToastDescription, ToastAction } from '../ui/toast';

interface Props{
    id: number;
    type: 'client' | 'contact' | 'testimonial' ;
}

export default function PermanentDelete({type, id }: Props) {

    const [isOpen, setIsOpen] = useState(false);
    const [toastOpen, setToastOpen] = useState(false);
    const [toastMessage, setToastMessage] = useState('');
    const [isError, setIsError] = useState(false);

    const handleDelete = async () => {
        try {
            await axios.post(`trash/delete/${type}/${id}`);
            setToastMessage(`${type} deleted successfully`);
            setIsError(false);
            setToastOpen(true);
            setIsOpen(false);
            window.location.reload();
        } catch (error) {
            setToastMessage(`Error deleting ${type}`);
            console.log(error);
            setIsError(true);
            setToastOpen(true);
        }
    };

    return (
        <ToastProvider>
            <div>
                <div className="space-y-6">
                    <Dialog open={isOpen} onOpenChange={setIsOpen}>
                        <DialogTrigger asChild>
                            <Button variant="destructive" className='cursor-pointer'> <DeleteIcon />Delete</Button>
                        </DialogTrigger>
                        <DialogContent className="DialogContent">
                            <DialogTitle className="text-sm font-semibold">
                                Are you sure you want to permanently delete this item?
                            </DialogTitle>
                            <DialogDescription>
                                This action cannot be undone.
                            </DialogDescription>
                            <DialogFooter className="gap-2">
                                <DialogClose asChild>
                                    <Button variant="outline" className='cursor-pointer'>
                                        Cancel
                                    </Button>
                                </DialogClose>
                                <Button variant="destructive" className='cursor-pointer' onClick={handleDelete}>
                                    Confirm
                                </Button>
                            </DialogFooter>
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
