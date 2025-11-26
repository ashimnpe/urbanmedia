import AppLayout from '@/layouts/app-layout';
import { dashboard } from '@/routes';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/react';
import { Contact, MessageSquare, User, Users } from 'lucide-react';
import { DashboardProps } from '@/interfaces/dashboard';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: dashboard().url,
    },
];

export default function Dashboard({ userCount, clientCount, contactCount, testimonialCount }: DashboardProps) {
    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Dashboard" />
            <div className="flex h-full flex-1 flex-col gap-4 rounded-xl p-4 overflow-x-auto">
                <div className="grid auto-rows-min text-xl gap-3 md:grid-cols-5 sm:grid-cols-2 grid-cols-1">
                    <a href='/admin/clients'>
                        <div className="border-sidebar-border/70 dark:border-sidebar-border relative aspect-video overflow-hidden rounded-xl border bg-white shadow-lg p-4 flex items-center dark:border-sidebar-border dark:bg-neutral-900 dark:text-white">
                            <div className="flex items-center justify-center w-12 h-12 rounded-full bg-blue-100 mr-4">
                                <Users className="text-red-500 w-6 h-6" />
                            </div>
                            <div>
                                <p className="text-lg font-semibold text-gray-800 dark:text-white">Clients</p>
                                <span className='text-4xl font-bold text-gray-800 dark:text-white'>{clientCount}</span>
                            </div>
                        </div>
                    </a>
                    <a href='/admin/contacts'>
                        <div className="border-sidebar-border/70 dark:border-sidebar-border relative aspect-video overflow-hidden rounded-xl border bg-white shadow-lg p-4 flex items-center dark:border-sidebar-border dark:bg-neutral-900 dark:text-white">
                            <div className="flex items-center justify-center w-12 h-12 rounded-full bg-blue-100 mr-4">
                                <Contact className="text-red-500 w-6 h-6" />
                            </div>
                            <div>
                                <p className="text-lg font-semibold text-gray-800 dark:text-white">Contact</p>
                                <span className='text-4xl font-bold text-gray-800 dark:text-white'>{contactCount}</span>
                            </div>
                        </div>
                    </a>
                    <a href='/admin/users'>
                        <div className="border-sidebar-border/70 dark:border-sidebar-border relative aspect-video overflow-hidden rounded-xl border bg-white shadow-lg p-4 flex items-center dark:border-sidebar-border dark:bg-neutral-900 dark:text-white">
                            <div className="flex items-center justify-center w-12 h-12 rounded-full bg-blue-100 mr-4">
                                <User className="text-red-500 w-6 h-6" />
                            </div>
                            <div>
                                <p className="text-lg font-semibold text-gray-800 dark:text-white">User</p>
                                <span className='text-4xl font-bold text-gray-800 dark:text-white'>{userCount}</span>
                            </div>
                        </div>
                    </a>
                    <a href='/admin/services'>
                        <div className="border-sidebar-border/70 dark:border-sidebar-border relative aspect-video overflow-hidden rounded-xl border bg-white shadow-lg p-4 flex items-center dark:border-sidebar-border dark:bg-neutral-900 dark:text-white">
                            <div className="flex items-center justify-center w-12 h-12 rounded-full bg-blue-100 mr-4">
                                <MessageSquare className="text-red-500 w-6 h-6" />
                            </div>
                            <div>
                                <p className="text-lg font-semibold text-gray-800 dark:text-white">Testimonial</p>
                                <span className='text-4xl font-bold text-gray-800 dark:text-white'>{testimonialCount}</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </AppLayout >
    );
}
