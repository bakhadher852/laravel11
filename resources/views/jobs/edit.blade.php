<x-layout>
    <header class="bg-white shadow">
        <div class="flex justify-between mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <h1 class=" font-bold text-2xl ">Edit Job: {{$job->title}} </h1>

        </div>
    </header>
    <div class="container mx-auto">


        <form class="" method="POST" action="/jobs">
            @csrf
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                        <div class="sm:col-span-4">
                            <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                            <div class="mt-2">
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">

                                    <input type="text" name="title" id="title" autocomplete="title"
                                        value="{{$job->title}}"
                                        class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                        placeholder="Type job ...">


                                </div>
                                @error('title')
                                    <p class="text-red-500 font-semibold text-sm mt-2">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="sm:col-span-4">
                            <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">Salary</label>
                            <div class="mt-2">
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">

                                    <input type="text" name="salary" id="salary" autocomplete="salary"
                                        value="{{$job->salary}}"
                                        class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                        placeholder="Type Salary ...">

                                </div>
                                @error('salary')
                                    <p class="text-red-500 font-semibold text-sm mt-2">{{$message}}</p>
                                @enderror
                            </div>
                        </div>




                    </div>
                </div>




            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/jobs/{{$job->id}}" type="button"
                    class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
            </div>
        </form>

    </div>
</x-layout>