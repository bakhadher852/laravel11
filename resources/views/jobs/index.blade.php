<x-layout>
    <header class="bg-white shadow">
        <div class="flex justify-between mx-auto max-w-7xl px-4 py-4 py-6 sm:px-6 lg:px-8">
            <h1>Heading </h1>
            <x-button href="/jobs/create">Create Job</x-button>
        </div>
    </header>
    <div class="container mx-auto mt-5">

        <div class='space-y-4'>
            @foreach ($jobs as $job)

                <a href="/jobs/{{$job->id}}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                    <div class='font-bold text-blue-500 text-sm'>{{$job->employer->name}}</div>
                    <div>
                        <strong>{{$job['title']}}</strong> Pays {{$job['salary']}} per year
                    </div>

                </a>


            @endforeach
            <div>{{$jobs->links()}}</div>
        </div>
    </div>
</x-layout>