import { Button } from '@/components/ui/button';
import { Eye } from 'lucide-react';
import { Dialog, DialogClose, DialogFooter, DialogContent, DialogDescription, DialogTitle, DialogTrigger } from '@/components/ui/dialog';
import { IUser } from '@/interfaces/user';
import '@/style/blog.css'

const formatLabel = (label: string) => {
    return label.toUpperCase();
};

export default function ViewUser({ user }: { user: IUser }) {

    return (
        <Dialog>
            <DialogTrigger asChild>
                <Button variant="ghost" className='cursor-pointer border'> <Eye />View</Button>
            </DialogTrigger>
            <DialogContent className="DialogContent max-h-[90vh] overflow-y-auto">
                <DialogTitle>User Details</DialogTitle>

                <DialogDescription>
                    Below are the details of the selected user.
                </DialogDescription>

                <div className="mt-4">
                    <dl className="grid grid-cols-1 gap-4">
                        <div>
                            <dt className="font-medium text-gray-700 bg-gray-200 p-3 rounded-lg shadow-sm">Full Name:</dt>
                            <dd className="text-gray-900 p-3 rounded-lg shadow-sm bg-gray-50">{user.name}</dd>
                        </div>
                        <div>
                            <dt className="font-medium text-gray-700 bg-gray-200 p-3 rounded-lg shadow-sm">Email:</dt>
                            <dd className="text-gray-900 p-3 rounded-lg shadow-sm bg-gray-50">{user.email}</dd>
                        </div>
                        <div>
                            <dt className="font-medium text-gray-700 bg-gray-200 p-3 rounded-lg shadow-sm">Role:</dt>
                            <dd className="text-gray-900 p-3 rounded-lg shadow-sm bg-gray-50">{formatLabel(user.role)}</dd>
                        </div>
                    </dl>
                </div>

                <DialogFooter className="gap-2">
                    <DialogClose asChild>
                        <Button variant="outline" className="cursor-pointer">Cancel</Button>
                    </DialogClose>
                </DialogFooter>
            </DialogContent>
        </Dialog>
    );
}
