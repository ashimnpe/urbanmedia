import { Button } from '@/components/ui/button';
import { Eye } from 'lucide-react';
import { Dialog, DialogClose, DialogFooter, DialogContent, DialogDescription, DialogTitle, DialogTrigger } from '@/components/ui/dialog';
import { IContact } from '@/interfaces/contact';
import '@/style/blog.css'

const formatLabel = (label: string) => {
    if (!label) return 'N/A';
    return label
        .replace(/_/g, ' ')
        .replace(/\b\w/g, (char) => char.toUpperCase());
};

export default function ViewContact({ contact }: { contact: IContact }) {

    return (
        <div className="space-y-6">
            <Dialog>
                <DialogTrigger asChild>
                    <Button variant="ghost" className="cursor-pointer border">
                        <Eye />View
                    </Button>
                </DialogTrigger>

                <DialogContent className="DialogContent max-h-[90vh] overflow-y-auto">
                    <DialogTitle>Contact Inquiry</DialogTitle>

                    <DialogDescription>
                        Below are the contact inquiry details.
                    </DialogDescription>

                    {/* Move <dl> outside DialogDescription */}
                    <div className="mt-4">
                        <dl className="grid grid-cols-2 gap-4">
                            <div>
                                <dt className="font-medium text-gray-700 bg-gray-200 p-3 rounded-lg shadow-sm">Full Name:</dt>
                                <dd className="text-gray-900 p-3 rounded-lg shadow-sm bg-gray-50">{contact.name}</dd>
                            </div>
                            <div>
                                <dt className="font-medium text-gray-700 bg-gray-200 p-3 rounded-lg shadow-sm">Email:</dt>
                                <dd className="text-gray-900 p-3 rounded-lg shadow-sm bg-gray-50">{contact.email}</dd>
                            </div>
                            <div>
                                <dt className="font-medium text-gray-700 bg-gray-200 p-3 rounded-lg shadow-sm">Phone:</dt>
                                <dd className="text-gray-900 p-3 rounded-lg shadow-sm bg-gray-50">{contact.phone}</dd>
                            </div>
                            <div className='col-span-2'>
                                <dt className="font-medium text-gray-700 bg-gray-200 p-3 rounded-lg shadow-sm">Subject:</dt>
                                <dd className="text-gray-900 p-3 rounded-lg shadow-sm bg-gray-50">{contact.subject}</dd>
                            </div>
                            <div className="col-span-2">
                                <dt className="font-medium text-gray-700 bg-gray-200 p-3 rounded-lg shadow-sm">Message:</dt>
                                <dd className="text-gray-900 p-3 rounded-lg shadow-sm bg-gray-50">{contact.message}</dd>
                            </div>
                        </dl>
                    </div>

                    <DialogFooter className="gap-2 mt-3">
                        <DialogClose asChild>
                            <Button variant="outline" className="cursor-pointer">
                                Cancel
                            </Button>
                        </DialogClose>
                    </DialogFooter>
                </DialogContent>
            </Dialog>
        </div>

    );
}
