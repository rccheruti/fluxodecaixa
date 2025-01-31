import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import {Head} from '@inertiajs/react';

export default function Debit() {
    return (
        <AuthenticatedLayout
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                    Debit
                </h2>
            }
        >
            <Head title="Debit"/>
            <h1 className="text-lg">Debit</h1>
        </AuthenticatedLayout>
    )
        ;
}
