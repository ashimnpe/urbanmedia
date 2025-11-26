import AppLayout from '@/layouts/app-layout';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/react';
import { IUser } from '@/interfaces/user';
import ViewUser from '@/components/user/view-user';
import DeleteUser from '@/components/user/delete-user';
import UserForm from '@/components/user/user-form';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'User',
        href: '/user',
    },
];

interface Props {
    users: IUser[]
}

const formatLabel = (label: string) => {
    return label.toUpperCase();
};

const User = ({ users }: Props) => {
    // const [unauthorizedVisible, setUnauthorizedVisible] = useState(false);
    // const [currentUser, setCurrentUser] = useState<IUser | null>(null);

    // useEffect(() => {
    //     const fetchUserInfo = async () => {
    //         try {
    //             const response = await axios.get('/admin/users/info');
    //             setCurrentUser(response.data);
    //             const userHasPermission = response.data.role === 'admin' || response.data.role === 'superadmin';
    //             if (!userHasPermission) {
    //                 setUnauthorizedVisible(true);
    //             }
    //         } catch (error) {
    //             console.error('Error fetching user info:', error);
    //             setUnauthorizedVisible(true);
    //         }
    //     };

    //     fetchUserInfo();
    // }, []);

    // if (unauthorizedVisible) {
    //     return <Unauthorized />; // Render the unauthorized component if no permission
    // }

    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="User" />

            <div className="flex h-full flex-1 flex-col gap-4 rounded-xl p-4 overflow-x-auto">
                <UserForm mode="create" />
                <div className="grid auto-rows-min gap-4 md:grid-cols-1">
                    <table className="min-w-full divide-y divide-gray-200 dark:text-white dark:bg-neutral-900">
                        <thead className="bg-gray-50 dark:text-white dark:bg-neutral-900">
                            <tr>
                                <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Full Name</th>
                                <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
                                <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody className="bg-white divide-y divide-gray-200 dark:text-white dark:bg-neutral-900">
                            {users.length === 0 ? (
                                <tr>
                                    <td colSpan={4} className="px-6 py-4 text-sm text-gray-900 text-center dark:text-white dark:bg-neutral-900">No users available</td>
                                </tr>
                            ) : (
                                users.map((user) => (
                                    <tr key={user.id}>
                                        <td className="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white dark:bg-neutral-900">{user.name}</td>
                                        <td className="px-6 py-4 whitespace text-sm text-gray-900 dark:text-white dark:bg-neutral-900">{user.email}</td>
                                        <td className="px-6 py-4 whitespace text-sm text-gray-900 dark:text-white dark:bg-neutral-900">{formatLabel(user.role)}</td>
                                        <td className="px-6 py-4 flex gap-2 text-sm font-medium dark:text-white dark:bg-neutral-900">
                                            <ViewUser user={user} />
                                            <UserForm mode="edit" user={user} />
                                            <DeleteUser user={user} />
                                        </td>
                                    </tr>
                                ))
                            )}
                        </tbody>
                    </table>
                </div>
            </div>
        </AppLayout>
    );
}

export default User
