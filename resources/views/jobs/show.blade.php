<x-layout class="">
    <div class="container mx-auto mt-5">
        <h2>{{$job['title']}}</h2>
        <p>This job pays : {{$job['salary']}}</p>
        <x-button href="/jobs/{{$job->id}}/edit" class="mt-4">Edit Job</x-button>
    </div>
</x-layout>