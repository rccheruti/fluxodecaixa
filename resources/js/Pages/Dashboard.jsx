import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import {Head} from '@inertiajs/react';

export default function Dashboard() {
    return (
        <AuthenticatedLayout
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                    Dashboard
                </h2>
            }

        >
            <Head title="Dashboard"/>

            <div className="py-12 flex-col">
                <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div className="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800">
                        <div className="p-6 text-gray-900 dark:text-gray-100">
                            <span className="font-bold">Credit</span>
                            <div className="m-4"></div>
                            <table className="table table-auto w-full text-left min-w-max">
                                <tr className="table-header-group">
                                    <th>Date</th>
                                    <th>Value</th>
                                    <th>Description</th>
                                    <th>TypeCash</th>

                                </tr>
                                <tr className="table-footer-group">
                                    <td>05/05/05</td>
                                    <td>R$ 25,25</td>
                                    <td>Lorem Ipsum</td>
                                    <td>Money</td>
                                </tr>
                                <tr className="table-footer-group">
                                    <td>05/05/05</td>
                                    <td>R$ 25,25</td>
                                    <td>Lorem Ipsum</td>
                                    <td>Money</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div className="m-20"></div>
                <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div className="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800">
                        <div className="p-6 text-gray-900 dark:text-gray-100">
                            <span className="font-bold">Debit</span>
                            <div className="m-4"></div>
                            <table className="table table-auto w-full text-left min-w-max">
                                <tr className="table-header-group">
                                    <th>Date</th>
                                    <th>Value</th>
                                    <th>Description</th>
                                    <th>TypeCash</th>

                                </tr>
                                <tr className="table-footer-group">
                                    <td>05/05/05</td>
                                    <td>R$ 25,25</td>
                                    <td>Lorem Ipsum</td>
                                    <td>Money</td>
                                </tr>
                                <tr className="table-footer-group">
                                    <td>05/05/05</td>
                                    <td>R$ 25,25</td>
                                    <td>Lorem Ipsum</td>
                                    <td>Money</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div className="m-20"></div>
                <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div className="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800">
                        <div className="p-6 text-gray-900 dark:text-gray-100">
                            <span className="font-bold">Balance</span>
                            <div className="m-4"></div>
                            <table className="table table-auto w-full text-left min-w-max">
                                <tr className="table-header-group">
                                    <th>Past month</th>
                                    <th>Actual month</th>
                                    <th>Diff actual x past</th>
                                </tr>
                                <tr className="table-footer-group">
                                    <td>R$ 1.000,00</td>
                                    <td>R$ 25,25</td>
                                    <td>R$ 1.000,00</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    )
        ;
}
