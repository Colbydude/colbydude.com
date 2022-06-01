<dialog
    id="contact"
    class="w-full p-0 text-slate-500 dark:text-slate-400 bg-white dark:bg-slate-900 rounded-lg text-left shadow-xl transition-all sm:max-w-2xl lg:max-w-4xl ease-out duration-150 backdrop:bg-black/0 backdrop:transition-all backdrop:ease-out backdrop:duration-150 opacity-0 sm:scale-95"
    aria-labelledby="contact-modal-header"
>
    <form method="POST" action="{{ url('/contact') }}" accept-charset="UTF-8">
        @csrf
        @honeypot

        <div class="absolute top-0 right-0 pt-4 pr-4">
            <button
                data-dismiss="contact"
                type="button"
                class="rounded-md text-slate-200 dark:text-slate-700 hover:text-slate-300 dark:hover:text-slate-600 transition duration-500 ease-in-out"
            >
                <span class="sr-only">Close</span>
                @svg('fontawesome/times', 'h-6 w-6')
            </button>
        </div>
        <div class="bg-white dark:bg-slate-900 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
            <header>
                <h4 id="contact-modal-header" class="text-lg leading-6 font-medium text-slate-800 dark:text-slate-300">Drop me a line</h4>
            </header>
            <main class="mt-5 grid gap-4 sm:grid-cols-2">
                <div>
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-slate-800 dark:text-slate-300">Name</label>
                        <div class="mt-1">
                            <input type="text" name="name" id="name" class="shadow-sm focus:ring-pink-500 focus:border-pink-500 block w-full sm:text-sm border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 transition duration-150 ease-in-out" placeholder="John Doe" required>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-slate-800 dark:text-slate-300">Email Address</label>
                        <div class="mt-1">
                            <input type="email" name="email" id="email" class="shadow-sm focus:ring-pink-500 focus:border-pink-500 block w-full sm:text-sm border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 transition duration-150 ease-in-out" placeholder="john@example.com" required>
                        </div>
                    </div>
                    <div>
                        <label for="subject" class="block text-sm font-medium text-slate-800 dark:text-slate-300">Subject</label>
                        <div class="mt-1">
                            <select name="subject" id="subject" class="shadow-sm focus:ring-pink-500 focus:border-pink-500 block w-full sm:text-sm border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 transition duration-150 ease-in-out" required>
                                <option value="" selected="selected">Choose One:</option>
                                <option value="General">General</option>
                                <option value="Support">Support</option>
                                <option value="HTML5 Licensing">HTML5 Licensing</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <label for="comments" class="block text-sm font-medium text-slate-800 dark:text-slate-300">Comments</label>
                    <div class="grow mt-1">
                        <textarea name="comments" id="comments" class="h-full shadow-sm focus:ring-pink-500 focus:border-pink-500 block w-full sm:text-sm border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 transition duration-150 ease-in-out" rows="5" placeholder="Message..." required></textarea>
                    </div>
                </div>
            </main>
        </div>
        <footer class="bg-gray-50 dark:bg-slate-800 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
            <button type="submit" class="w-full inline-flex justify-center bg-transparent border border-pink-500 text-pink-500 dark:text-pink-400 dark:border-pink-400 cursor-pointer text-[14px] py-[6px] px-3 text-center touch-manipulation hover:bg-pink-800/20 dark:hover:bg-pink-700/20 transition duration-500 ease-in-out sm:ml-3 sm:w-auto sm:text-sm">Send Message</button>
            <button data-dismiss="contact" type="button" class="mt-3 w-full inline-flex justify-center bg-transparent border border-slate-200 text-black dark:text-slate-300 dark:border-slate-700 cursor-pointer text-[14px] py-[6px] px-3 text-center touch-manipulation hover:bg-slate-200/20 dark:hover:bg-slate-700/20 transition duration-500 ease-in-out sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Cancel</button>
        </footer>
    </form>
</dialog>
