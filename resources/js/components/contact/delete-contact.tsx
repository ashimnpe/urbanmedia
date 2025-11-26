import { Button } from '@/components/ui/button';
import { DeleteIcon } from 'lucide-react';
import { Dialog, DialogClose, DialogFooter, DialogContent, DialogDescription, DialogTitle, DialogTrigger } from '@/components/ui/dialog';
import { IContact } from '@/interfaces/contact';
import axios from 'axios';
import '@/style/blog.css'
import { useEffect, useState } from 'react';
import { IUser } from '@/interfaces/user';
import { ToastViewport, ToastProvider, Toast, ToastTitle, ToastDescription, ToastAction } from '../ui/toast';

export default function DeleteContact({ contact }: { contact: IContact }) {
    const [isOpen, setIsOpen] = useState(false);
    const [currentUser, setCurrentUser] = useState<IUser | null>(null);
    const [toastOpen, setToastOpen] = useState(false);
    const [toastMessage, setToastMessage] = useState('');
    const [isError, setIsError] = useState(false);

    useEffect(() => {
        const fetchUserInfo = async () => {
            try {
                const response = await axios.get('/admin/users/info');
                setCurrentUser(response.data);
            } catch (error) {
                console.log('Error fetching user info:', error);
            }
        };
        fetchUserInfo();
    }, []);

    const handleDelete = async () => {
        try {
            await axios.delete(`/admin/contacts/delete/${contact.id}`);
            setToastMessage('Contact Deleted successfully');
            setIsError(false);
            setToastOpen(true);
            setIsOpen(false);
            window.location.reload();
        } catch (error) {
            setToastMessage('Error deleting contact');
            console.log('Error deleting contact', error);
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
                            {currentUser?.role !== 'user' && (
                                <Button variant="destructive" className='cursor-pointer'> <DeleteIcon />Delete</Button>
                            )}
                        </DialogTrigger>
                        <DialogContent className="DialogContent">
                            <DialogTitle>
                                Are you sure want to delete ?
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
