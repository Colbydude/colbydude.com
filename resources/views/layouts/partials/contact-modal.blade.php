<div id="contact" style="display: none;" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div id="contact-backdrop" class="fixed inset-0 bg-black bg-opacity-50 transition-opacity ease-out duration-150 opacity-0" aria-hidden="true"></div>

        {{-- This element is to trick the browser into centering the modal contents. --}}
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <form
            id="contact-modal"
            method="POST"
            action="{{ url('/contact') }}"
            accept-charset="UTF-8"
            class="w-full relative inline-block align-bottom text-slate-500 dark:text-slate-400 bg-white dark:bg-slate-900 rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-2xl lg:max-w-4xl ease-out duration-150 opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        >
            @csrf
            @honeypot

            <div class="hidden sm:block absolute top-0 right-0 pt-4 pr-4">
                <button
                    data-dismiss="modal"
                    type="button"
                    class="rounded-md text-slate-200 dark:text-slate-700 hover:text-slate-300 dark:hover:text-slate-600 transition duration-500 ease-in-out"
                >
                    <span class="sr-only">Close</span>
                    @svg('fontawesome/times', 'h-6 w-6')
                </button>
            </div>
            <div class="bg-white dark:bg-slate-900 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <h4 class="text-lg leading-6 font-medium text-slate-800 dark:text-slate-300" id="modal-title">Drop me a line</h4>
                <div class="mt-5 grid gap-4 sm:grid-cols-2">
                    <div>
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-slate-800 dark:text-slate-300">Name</label>
                            <div class="mt-1">
                                <input type="text" name="name" id="name" class="shadow-sm focus:ring-pink-500 focus:border-pink-500 block w-full sm:text-sm border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 transition duration-150 ease-in-out" placeholder="John Doe" required>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-slate-800 dark:text-slate-300">Email Address</label>
                            <input type="email" name="email" id="email" class="shadow-sm focus:ring-pink-500 focus:border-pink-500 block w-full sm:text-sm border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 transition duration-150 ease-in-out" placeholder="john@example.com" required>
                        </div>
                        <div class="mb-4">
                            <label for="subject" class="block text-sm font-medium text-slate-800 dark:text-slate-300">Subject</label>
                            <select name="subject" id="subject" class="shadow-sm focus:ring-pink-500 focus:border-pink-500 block w-full sm:text-sm border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 transition duration-150 ease-in-out" required>
                                <option value="" selected="selected">Choose One:</option>
                                <option value="General">General</option>
                                <option value="Support">Support</option>
                                <option value="HTML5 Licensing">HTML5 Licensing</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label for="name" class="block text-sm font-medium text-slate-800 dark:text-slate-300">Comments</label>
                        <textarea name="comments" id="comments" class="sm:h-[190px] shadow-sm focus:ring-pink-500 focus:border-pink-500 block w-full sm:text-sm border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-900 transition duration-150 ease-in-out" placeholder="Message..." required></textarea>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 dark:bg-slate-800 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button type="submit" class="w-full inline-flex justify-center bg-transparent border border-pink-500 text-pink-500 dark:text-pink-400 dark:border-pink-400 cursor-pointer text-[14px] py-[6px] px-3 text-center touch-manipulation hover:bg-pink-800/20 dark:hover:bg-pink-700/20 transition duration-500 ease-in-out sm:ml-3 sm:w-auto sm:text-sm">Send Message</button>
                <button data-dismiss="modal" type="button" class="mt-3 w-full inline-flex justify-center bg-transparent border border-slate-200 text-black dark:text-slate-300 dark:border-slate-700 cursor-pointer text-[14px] py-[6px] px-3 text-center touch-manipulation hover:bg-slate-200/20 dark:hover:bg-slate-700/20 transition duration-500 ease-in-out sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Cancel</button>
            </div>
        </form>
    </div>
</div>
