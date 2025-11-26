import { useState } from 'react';
import AppLayout from '@/layouts/app-layout';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/react';
import { IContact } from '@/interfaces/contact'; // Adjust the import based on your file structure
import { IClient } from '@/interfaces/client';
import { Tabs, TabsContent, TabsList, TabsTrigger } from '@radix-ui/react-tabs';
import PermanentDelete from '@/components/trash/delete-data';
import RestoreData from '@/components/trash/restore-data';
// import { truncateText } from '@/lib/utils';
import { ITestimonial } from '@/interfaces/testimonial';
import ViewTestimonial from '@/components/testimonial/view-testimonial';
import ViewClient from '@/components/client/view-client';
import ViewContact from '@/components/contact/view-contact';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Trash',
        href: '/trash',
    },
];

interface Props {
    trash: {
        client: IClient[],
        contact: IContact[],
        testimonial: ITestimonial[],
    }
}

const Trash = ({ trash }: Props) => {
    const { client, contact, testimonial } = trash;
    const [activeTab, setActiveTab] = useState(() => localStorage.getItem('activeTab') || 'client');
    const handleTabChange = (tab: string) => {
        setActiveTab(tab);
        localStorage.setItem('activeTab', tab);
    };

    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Trash" />
            <div className="flex h-full flex-1 flex-col gap-4 rounded-xl p-4 overflow-x-auto">
                <div className="grid auto-rows-min gap-4 md:grid-cols-1">
                    <Tabs value={activeTab} onValueChange={handleTabChange}>
                        <TabsList className="flex space-x-4 border-b-2 border-blue-600">
                            <TabsTrigger value="client"
                                className={`cursor-pointer px-6 py-2 text-md font-semibold transition-all duration-200 rounded-t-lg ${activeTab === 'client' ? 'bg-blue-600 text-white' : 'text-blue-600 hover:bg-blue-600 hover:text-white'
                                    }`}
                            >
                                Client
                            </TabsTrigger>
                            <TabsTrigger value="testimonial"
                                className={`cursor-pointer px-6 py-2 text-md font-semibold transition-all duration-200 rounded-t-lg ${activeTab === 'testimonial' ? 'bg-blue-600 text-white' : 'text-blue-600 hover:bg-blue-600 hover:text-white'
                                    }`}
                            >
                                Testimonials
                            </TabsTrigger>
                            <TabsTrigger value="contact"
                                className={`cursor-pointer px-6 py-2 text-md font-semibold transition-all duration-200 rounded-t-lg ${activeTab === 'contact' ? 'bg-blue-600 text-white' : 'text-blue-600 hover:bg-blue-600 hover:text-white'
                                    }`}
                            >
                                Contact
                            </TabsTrigger>
                        </TabsList>

                        {/* Content */}
                        <TabsContent value="client" className="p-6 bg-white rounded-b-lg shadow-lg">
                            <table className="min-w-full divide-y divide-gray-200">
                                <thead className="bg-gray-50">
                                    <tr>
                                        <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Full Name</th>
                                        <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Logo</th>
                                        <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                                    </tr>
                                </thead>
                                <tbody className="bg-white divide-y divide-gray-200">
                                    {client.length === 0 ? (
                                        <tr>
                                            <td colSpan={4} className="px-6 py-4 text-sm text-gray-900 text-center">No trashed client</td>
                                        </tr>
                                    ) : (
                                        client.map((client: IClient) => (
                                            <tr key={client.id}>
                                                <td className="px-6 py-4 text-sm text-gray-900">{client.name}</td>
                                                <td className="px-6 py-4 text-sm text-gray-900">
                                                    <img src={client.media?.[0].original_url} alt={client.name} className="w-16 h-16 object-cover" />
                                                </td>

                                                <td className="px-6 py-4 flex gap-2 text-sm font-medium">
                                                    <ViewClient client={client} />
                                                    <RestoreData type="client" id={client.id} />
                                                    <PermanentDelete type="client" id={client.id} />
                                                </td>
                                            </tr>
                                        ))
                                    )}
                                </tbody>
                            </table>
                        </TabsContent>

                        <TabsContent value="testimonial" className="p-6 bg-white rounded-b-lg shadow-lg">
                            <table className="min-w-full divide-y divide-gray-200">
                                <thead className="bg-gray-50">
                                    <tr>
                                        <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Full Name</th>
                                        <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Designation</th>
                                        <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Company</th>
                                        <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                                    </tr>
                                </thead>
                                <tbody className="bg-white divide-y divide-gray-200">
                                    {testimonial.length === 0 ? (
                                        <tr>
                                            <td colSpan={4} className="px-6 py-4 text-sm text-gray-900 text-center">No trashed testimonials</td>
                                        </tr>
                                    ) : (
                                        testimonial.map((testimonial) => (
                                            <tr key={testimonial.id}>
                                                <td className="px-6 py-4 text-sm text-gray-900">{testimonial.name}</td>
                                                <td className="px-6 py-4 text-sm text-gray-900">{testimonial.designation}</td>
                                                <td className="px-6 py-4 text-sm text-gray-900">{testimonial.company}</td>
                                                <td className="px-6 py-4 flex gap-2">
                                                    <ViewTestimonial testimonial={testimonial} />
                                                    <RestoreData id={testimonial.id} type='testimonial' />
                                                    <PermanentDelete id={testimonial.id} type='testimonial' />
                                                </td>
                                            </tr>
                                        ))
                                    )}
                                </tbody>
                            </table>
                        </TabsContent>

                        <TabsContent value="contact" className="p-6 bg-white rounded-b-lg shadow-lg">
                            <table className="min-w-full divide-y divide-gray-200">
                                <thead className="bg-gray-50">
                                    <tr>
                                        <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Full Name</th>
                                        <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                        <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone</th>
                                        <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                    </tr>
                                </thead>
                                <tbody className="bg-white divide-y divide-gray-200">
                                    {contact.length === 0 ? (
                                        <tr>
                                            <td colSpan={4} className="px-6 py-4 text-sm text-gray-900 text-center">No contact available</td>
                                        </tr>
                                    ) : (
                                        contact.map((contact) => (
                                            <tr key={contact.id}>
                                                <td className="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{contact.name}</td>
                                                <td className="px-6 py-4 whitespace text-sm text-gray-900">{contact.email}</td>
                                                <td className="px-6 py-4 whitespace text-sm text-gray-900">{contact.phone}</td>
                                                <td className="px-6 py-4 flex gap-2">
                                                    <ViewContact contact={contact} />
                                                    <RestoreData id={contact.id} type='contact' />
                                                    <PermanentDelete id={contact.id} type='contact' />
                                                </td>
                                            </tr>
                                        ))
                                    )}
                                </tbody>
                            </table>
                        </TabsContent>

                    </Tabs>


                </div>
            </div>
        </AppLayout>
    );
}

export default Trash
