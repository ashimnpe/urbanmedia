import AppLayout from '@/layouts/app-layout';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/react';
import { ITestimonial } from '@/interfaces/testimonial';
import DeleteTestimonial from '@/components/testimonial/delete-testimonial';
import TestimonialForm from '@/components/testimonial/testimonial-form';
import { truncateText } from '@/lib/utils';
import ViewTestimonial from '@/components/testimonial/view-testimonial';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Testimonial',
        href: '/testimonial',
    },
];

interface Props {
    testimonials: ITestimonial[]
}

const Testimonial = ({ testimonials = [] }: Props) => {

    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Testimonial" />
            <div className="flex h-full flex-1 flex-col gap-4 rounded-xl p-4 overflow-x-auto">
                <div>
                    <TestimonialForm mode="create" />
                </div>
                <div className="grid auto-rows-min gap-4 md:grid-cols-1">
                    <table className="min-w-full divide-y divide-gray-200 dark:text-white dark:bg-neutral-900">
                        <thead className="bg-gray-50 dark:text-white dark:bg-neutral-900">
                            <tr>
                                <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Full Name</th>
                                <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Designation</th>
                                <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Company</th>
                                <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Feedback</th>
                                <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                            </tr>
                        </thead>
                        <tbody className="bg-white divide-y divide-gray-200 dark:text-white dark:bg-neutral-900">
                            {testimonials.length === 0 ? (
                                <tr>
                                    <td colSpan={5} className="px-6 py-4 text-sm text-gray-900 text-center dark:text-white dark:bg-neutral-900">No testimonials available</td>
                                </tr>
                            ) : (
                                testimonials.map((testimonial) => (
                                    <tr key={testimonial.id}>
                                        <td className="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white dark:bg-neutral-900">{testimonial.name}</td>
                                        <td className="px-6 py-4 whitespace text-sm text-gray-900 dark:text-white dark:bg-neutral-900">{testimonial.designation}</td>
                                        <td className="px-6 py-4 whitespace text-sm text-gray-900 dark:text-white dark:bg-neutral-900">{testimonial.company}</td>
                                        <td className="px-6 py-4 whitespace text-sm text-gray-900 dark:text-white dark:bg-neutral-900">{truncateText(testimonial.feed, 100)}</td>
                                        <td className="px-6 py-4 flex gap-2 text-sm font-medium dark:text-white dark:bg-neutral-900">
                                            <ViewTestimonial testimonial={testimonial} />
                                            <TestimonialForm mode="edit" testimonial={testimonial} />
                                            <DeleteTestimonial testimonial={testimonial} />
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


export default Testimonial
