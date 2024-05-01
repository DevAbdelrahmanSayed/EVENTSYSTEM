@extends('layout.app')
@section('content')

<div class="antialiased bg-[#23242A]">
    <main class="p-4 md:ml-64 h-auto pt-20">
        <nav class="flex px-2 py-3  border border-[#424650] rounded-lg bg-[#323741]  mt-4" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                @include('layout.navLink')
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <a href="{{route('notification.index')}}" class="inline-flex items-center text-sm font-medium text-[#F5F5F7] hover:text-[#827FFF] ">
                            Notifications
                        </a>
                    </div>
                </li>
            </ol>
        </nav>

        <h2 class="mb-3 mt-4 text-3xl font-extrabold leading-none tracking-tight  md:text-4xl text-[#f5f5f7]">Requests Approved:</h2>

        <div class=" p-15 relative overflow-x-auto bg-[#23242A] ">
            <table class="w-full text-sm text-center border border-[#424650]  bg-[#323741]">
                <thead class="text-xs uppercase  border border-[#424650]  text-[#f5f5f7]">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Notification Type
                    </th>

                    <th scope="col" class="px-6 py-3">
                        date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        details
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr class="bg-[#111827] border-[#424650] ">
                    <td class="px-6 py-4 font-small text-center text-[#f5f5f7] whitespace-nowrap  ">
                        Edit club info
                    </td>

                    <td class="px-6 py-4 font-small text-center text-[#f5f5f7] ">
                        5min
                    </td>
                    <td class="px-6 py-4 font-small text-center text-green-500 ">
                        Approved
                    </td>
                    <td class="px-6 py-4 text-center rtl:text-right font-small  ">
                        <a href="#" class="font-small text-[#827FFF] hover:underline" onclick="showDetailsApproved(this)">Show details</a>
                    </td>
                </tr>
                <!-- Add more rows as needed -->

                </tbody>
            </table>
        </div>


        <!--------------------for rejected notification-------------------->
        <h2 class="mb-3 mt-4 text-3xl font-extrabold leading-none tracking-tight  md:text-4xl text-[#f5f5f7]">Requests Rejeceted:</h2>

        <div class=" p-15 relative overflow-x-auto bg-[#23242A] ">
            <table class="w-full text-sm text-center border border-[#424650]  bg-[#323741]">
                <thead class="text-xs uppercase  border border-[#424650]  text-[#f5f5f7]">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Notification Type
                    </th>

                    <th scope="col" class="px-6 py-3">
                        date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        details
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr class="bg-[#111827] border-[#424650] ">
                    <td class="px-6 py-4 font-small text-center text-[#f5f5f7] whitespace-nowrap  ">
                        Edit club info
                    </td>

                    <td class="px-6 py-4 font-small text-center text-[#f5f5f7] ">
                        5min
                    </td>
                    <td class="px-6 py-4 font-small text-center text-red-500 ">
                        Rejected
                    </td>
                    <td class="px-6 py-4 text-center rtl:text-right font-small  ">
                        <a href="#" class="font-small text-[#827FFF] hover:underline" onclick="showDetailsRejected(this)">Show details</a>
                    </td>
                </tr>
                <!-- Add more rows as needed -->

                </tbody>
            </table>
        </div>
        <!---Badges--------------------------------->
    </main>
</div>
@endsection
@section('scripts')
    <!------for Approved request script------->
    <script>
        function showDetailsApproved(link) {
            var row = link.parentNode.parentNode;
            var detailsRow = row.nextElementSibling;

            if (detailsRow && detailsRow.classList.contains('details-row')) {
                detailsRow.parentNode.removeChild(detailsRow);
                link.innerText = 'Show details';
            } else {
                detailsRow = document.createElement('tr');
                detailsRow.classList.add('details-row');
                detailsRow.innerHTML = `
                            <td  colspan="5" class="bg-[#2a2d35] text-left text-[#f5f5f7] px-6 py-4">
                                <!-- Add your detailed information here -->
                                <p>Your Request Has Been Approved!</p>
                            </td>
                        `;
                row.parentNode.insertBefore(detailsRow, row.nextSibling);
                link.innerText = 'Hide details';
            }
        }
    </script>
    <!------for rejected request script------->
    <script>
        function showDetailsRejected(link) {
            var row = link.parentNode.parentNode;
            var detailsRow = row.nextElementSibling;

            if (detailsRow && detailsRow.classList.contains('details-row')) {
                detailsRow.parentNode.removeChild(detailsRow);
                link.innerText = 'Show details';
            } else {
                detailsRow = document.createElement('tr');
                detailsRow.classList.add('details-row');
                detailsRow.innerHTML = `
                        <td  colspan="5" class="bg-[#2a2d35] text-left text-[#f5f5f7] px-6 py-4">
                            <!-- Add your detailed information here -->
                            <p>Reason of Rejection: This is the detailed information about the product.</p>
                        </td>
                    `;
                row.parentNode.insertBefore(detailsRow, row.nextSibling);
                link.innerText = 'Hide details';
            }
        }
    </script>
@endsection
