import { Button } from '@/components/ui/button';
import { Eye } from 'lucide-react';
import { Dialog, DialogClose, DialogFooter, DialogContent, DialogTitle, DialogDescription, DialogTrigger } from '@/components/ui/dialog';
import { IClient } from '@/interfaces/client';

export default function ViewClient({ client }: { client: IClient }) {
    return (
        <div className="space-y-6">
            <Dialog>
                <DialogTrigger asChild>
                    <Button variant="ghost" className='cursor-pointer border'> <Eye />View</Button>
                </DialogTrigger>
                <DialogContent className="DialogContent view-client" aria-describedby="blog-content">
                    <DialogTitle className='text-center'>Client Details</DialogTitle>
                    <DialogDescription asChild>
                        <dl>
                            <img src={client.media?.[0]?.original_url || 'path/to/no-image.png'} alt={client.name} className="mx-auto h-75 w-75 object-contain rounded-md" />

                            <div className="content text-center">
                                <h1 className="text-lg font-bold">{client.name}</h1>
                            </div>
                        </dl>
                    </DialogDescription>
                    <DialogFooter className="gap-2">
                        <DialogClose asChild>
                            <Button variant="outline" className='cursor-pointer'>
                                Close
                            </Button>
                        </DialogClose>
                    </DialogFooter>
                </DialogContent>
            </Dialog>
        </div >
    );
}
