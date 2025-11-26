import { NavItem } from '@/types';
import {Contact, Globe, LayoutGrid, MessageSquare, Trash, User, Users } from 'lucide-react';

export const footerNavItems: NavItem[] = [
    {
        title: 'Trash',
        href: '/admin/trash',
        icon: Trash,
        target: '_self'
    },
    {
        title: 'Website',
        href: 'https://mnmedia.com.np/',
        icon: Globe,
        target: '_blank'
    },
];

export const mainNavItems: NavItem[] = [
    {
        title: 'Dashboard',
        href: '/admin/dashboard',
        icon: LayoutGrid,
    },
    {
        title: 'Testimonials',
        href: '/admin/testimonials',
        icon: MessageSquare,
    },
    {
        title: 'Contact',
        href: '/admin/contacts',
        icon: Contact,
    },
    {
        title: 'Clients',
        href: '/admin/clients',
        icon: Users,
    },
    {
        title: 'Users',
        href: '/admin/users',
        icon: User,
    },
];


