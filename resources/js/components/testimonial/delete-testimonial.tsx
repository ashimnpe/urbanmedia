import { Button } from '@/components/ui/button';
import { DeleteIcon } from 'lucide-react';
import { Dialog, DialogClose, DialogFooter, DialogContent, DialogDescription, DialogTitle, DialogTrigger } from '@/components/ui/dialog';
import { ITestimonial } from '@/interfaces/testimonial';
import axios from 'axios';
import { useState } from 'react';
import { ToastViewport, ToastProvider, Toast, ToastTitle, ToastDescription, ToastAction } from '../ui/toast';

export default function DeleteTestimonial({ testimonial }: { testimonial: ITestimonial }) {

    const [isOpen, setIsOpen] = useState(false);
    const [toastOpen, setToastOpen] = useState(false);
    const [toastMessage, setToastMessage] = useState('');
    const [isError, setIsError] = useState(false);

    const handleDelete = async () => {
        try {
            await axios.delete(`/admin/testimonials/delete/${testimonial.id}`);
            setToastMessage('Testimonial Deleted successfully');
            setIsError(false);
            setToastOpen(true);
            setIsOpen(false);
            window.location.reload();
        } catch (error) {
            setToastMessage('Error deleting testimonial');
            setIsError(true);
            setToastOpen(true);
            console.log('Error deleting testimonial', error)
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
