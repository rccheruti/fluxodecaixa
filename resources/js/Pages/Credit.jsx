import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import {Head} from '@inertiajs/react';

export default function Credit() {
    return (
        <AuthenticatedLayout
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                    Credit
                </h2>
            }
        >
            <Head title="Credit"/>
            <h1 className="text-lg">Credit</h1>
        </AuthenticatedLayout>
    )
        ;
}
