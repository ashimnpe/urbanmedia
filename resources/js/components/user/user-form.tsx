import { Button } from '@/components/ui/button';
import { Plus, Edit2 } from 'lucide-react';
import { Dialog, DialogClose, DialogFooter, DialogContent, DialogDescription, DialogTitle, DialogTrigger } from '@/components/ui/dialog';
import { useEffect, useState } from 'react';
import axios, { AxiosError } from 'axios';
import { ToastViewport, ToastProvider, Toast, ToastTitle, ToastDescription, ToastAction } from '../ui/toast';
import { IUser } from '@/interfaces/user';
import '@/style/modal.css';

interface UserFormProps {
    mode: 'create' | 'edit';
    user?: IUser;
}

export default function UserForm({ mode, user }: UserFormProps) {
    const [name, setName] = useState(user?.name || '');
    const [email, setEmail] = useState(user?.email || '');
    const [role, setRole] = useState(user?.role || '');
    const [password, setPassword] = useState('');
    const [confirmPassword, setConfirmPassword] = useState('');
    const [toastOpen, setToastOpen] = useState(false);
    const [toastMessage, setToastMessage] = useState('');
    const [isError, setIsError] = useState(false);
    const [isDialogOpen, setIsDialogOpen] = useState(false);



    const handleSubmit = async (e: React.FormEvent) => {
        e.preventDefault();
        try {
            const formData = new FormData();
            formData.append('name', name);
            formData.append('email', email);
            formData.append('role', role);
            if (mode === 'create') {
                formData.append('password', password);
                formData.append('password_confirmation', confirmPassword);
            }

            const url = mode === 'create'
                ? '/admin/users/store'
                : `/admin/users/update/${user?.id}`;

            await axios.post(url, formData);

            setToastMessage(`User ${mode === 'create' ? 'Created' : 'Updated'} successfully`);
            setIsError(false);
            setToastOpen(true);
            window.location.reload();
        } catch (error) {
            const axiosError = error as AxiosError<{ message: string }>;
            const message = axiosError.response?.data?.message || `Error ${mode === 'create' ? 'creating' : 'updating'} user`;
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
                                {mode === 'create' ? 'Create User' : 'Edit'}
                            </Button>
                        </DialogTrigger>
                        <DialogContent
                            className="DialogContent"
                            onInteractOutside={(e) => {
                                e.preventDefault();
                            }}
                        >
                            <DialogTitle>
                                {mode === 'create' ? 'Create' : 'Edit'} Team
                            </DialogTitle>
                            <DialogDescription asChild>
                                <span className="text-muted-foreground text-sm">
                                    {mode === 'create' ? 'Fill in the team details below' : 'Update the team details below'}
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
                                        <label className="text-sm text-gray-600" htmlFor="email">Email</label>
                                        <input
                                            type="email"
                                            id="email"
                                            placeholder="Enter email"
                                            className="w-full p-2 border border-gray-300 rounded-md"
                                            value={email}
                                            onChange={(e) => setEmail(e.target.value)}
                                        />
                                    </div>
                                    <div className="flex flex-col space-y-2">
                                        <label className="text-sm text-gray-600" htmlFor="role">Role</label>
                                        <select
                                            id="role"
                                            className="w-full p-2 border border-gray-300 rounded-md"
                                            value={role}
                                            onChange={(e) => setRole(e.target.value)}
                                        >
                                            <option value="">Select Role</option>
                                            <option value="admin">Admin</option>
                                            <option value="user">User</option>
                                        </select>
                                    </div>

                                    {mode === 'create' ? (
                                        <>
                                            <div className="flex flex-col space-y-2">
                                                <label className="text-sm text-gray-600" htmlFor="password">Password</label>
                                                <input
                                                    type="password"
                                                    id="password"
                                                    placeholder="Enter password"
                                                    className="w-full p-2 border border-gray-300 rounded-md"
                                                    value={password}
                                                    onChange={(e) => setPassword(e.target.value)}
                                                />
                                            </div>
                                            <div className="flex flex-col space-y-2">
                                                <label className="text-sm text-gray-600" htmlFor="confirmPassword">Confirm Password</label>
                                                <input
                                                    type="password"
                                                    id="confirmPassword"
                                                    placeholder="Enter confirm password"
                                                    className="w-full p-2 border border-gray-300 rounded-md"
                                                    value={confirmPassword}
                                                    onChange={(e) => setConfirmPassword(e.target.value)}
                                                />
                                            </div>
                                        </>
                                    ) : (
                                        <>
                                            <input type="hidden" name="password" value={password} />
                                            <input type="hidden" name="confirmPassword" value={confirmPassword} />
                                        </>
                                    )}
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
