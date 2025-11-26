import AppLayout from '@/layouts/app-layout';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/react';
import { IClient } from '@/interfaces/client';
import ClientForm from '@/components/client/client-form';
import ViewClient from '@/components/client/view-client';
import DeleteClient from '@/components/client/delete-client';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Clients',
        href: '/clients',
    },
];

interface Props {
    clients: IClient[]
}

const Client = ({ clients = [] }: Props) => {

    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Clients" />
            <div className="flex h-full flex-1 flex-col gap-4 rounded-xl p-4 overflow-x-auto">
                <div>
                    <ClientForm mode="create" />
                </div>
                <div className="grid auto-rows-min gap-4 md:grid-cols-1">
                    <table className="min-w-full divide-y divide-gray-200 dark:text-white dark:bg-neutral-900">
                        <thead className="bg-gray-50 dark:text-white dark:bg-neutral-900">
                            <tr>
                                <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Full Name</th>
                                <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Order</th>
                                <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Logo</th>
                                <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                            </tr>
                        </thead>
                        <tbody className="bg-white divide-y divide-gray-200 dark:text-white dark:bg-neutral-900">
                            {clients.length === 0 ? (
                                <tr>
                                    <td colSpan={4} className="px-6 py-4 text-sm text-gray-900 text-center">No clients available</td>
                                </tr>
                            ) : (
                                clients.map((client) => (
                                    <tr key={client.id}>
                                        <td className="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white dark:bg-neutral-900">{client.name}</td>
                                        <td className="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white dark:bg-neutral-900">{client.order}</td>
                                        <td className="px-6 py-4 whitespace text-sm text-gray-900 dark:text-white dark:bg-neutral-900">
                                            <img src={client.media?.[0]?.original_url || 'path/to/no-image.png'} alt={client.name} className="mt-2 mx-auto w-30 h-30 object-contain rounded-md" />
                                        </td>
                                        <td className="px-6 py-4 flex gap-2 text-sm font-medium dark:text-white dark:bg-neutral-900">
                                            <ViewClient client={client} />
                                            <ClientForm mode="edit" client={client} />
                                            <DeleteClient client={client} />
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


export default Client
