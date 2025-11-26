import AppLayout from '@/layouts/app-layout';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/react';
import { IContact } from '@/interfaces/contact'; // Adjust the import based on your file structure
import ViewContact from '@/components/contact/view-contact';
import DeleteContact from '@/components/contact/delete-contact';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Contact',
        href: '/contact',
    },
];

interface Props {
    contacts: IContact[]
}


const Contact = ({ contacts }: Props) => {
    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Contact" />
            <div className="flex h-full flex-1 flex-col gap-4 rounded-xl p-4 overflow-x-auto">
                <div className="grid auto-rows-min gap-4 md:grid-cols-1">
                    <table className="min-w-full divide-y divide-gray-200 dark:text-white dark:bg-neutral-900">
                        <thead className="bg-gray-50 dark:text-white dark:bg-neutral-900">
                            <tr>
                                <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Full Name</th>
                                <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone</th>
                                <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody className="bg-white divide-y divide-gray-200 dark:text-white dark:bg-neutral-900">
                            {contacts.length === 0 ? (
                                <tr>
                                    <td colSpan={4} className="px-6 py-4 text-sm text-gray-900 text-center dark:text-white dark:bg-neutral-900">No contacts available</td>
                                </tr>
                            ) : (
                                contacts.map((contact) => (
                                    <tr key={contact.id}>
                                        <td className="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white dark:bg-neutral-900">{contact.name}</td>
                                        <td className="px-6 py-4 whitespace text-sm text-gray-900 dark:text-white dark:bg-neutral-900">{contact.email}</td>
                                        <td className="px-6 py-4 whitespace text-sm text-gray-900 dark:text-white dark:bg-neutral-900">{contact.phone}</td>
                                        <td className="px-6 py-4 flex gap-2 text-sm font-medium dark:text-white dark:bg-neutral-900">
                                            <ViewContact contact={contact} />
                                            <DeleteContact contact={contact} />
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

export default Contact
