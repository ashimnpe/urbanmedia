import { Button } from '@/components/ui/button';
import '@/style/blog.css'
import axios from 'axios';
import { ArchiveRestore } from 'lucide-react';
import { ToastViewport, ToastProvider, Toast, ToastTitle, ToastDescription, ToastAction } from '../ui/toast';
import { useState } from 'react';

interface Props {
    id: number;
    type: 'client' | 'contact' | 'testimonial';
}

export default function RestoreData({ type, id }: Props) {
    const [toastOpen, setToastOpen] = useState(false);
    const [toastMessage, setToastMessage] = useState('');
    const [isError, setIsError] = useState(false);

    const handleRestore = async () => {
        try {
            await axios.post(`trash/restore/${type}/${id}`);
            setToastMessage(`${type} restored successfully`);
            setIsError(false);
            setToastOpen(true);
            window.location.reload();
        } catch (error) {
            setToastMessage(`Error restoring ${type}`);
            console.log(error);
            setIsError(true);
            setToastOpen(true);
        }
    };

    return (
        <ToastProvider>
            <div>
                <div className="space-y-6">
                    <Button variant="outline" className='cursor-pointer' onClick={handleRestore}>
                        <ArchiveRestore />Restore
                    </Button>
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
