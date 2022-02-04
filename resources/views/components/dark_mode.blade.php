
<nav aria-label="Secondary"  class="absolute top-0 flex items-center w-16 h-16 space-x-4 right-44">
    <!-- Toggle dark theme button -->
    <button aria-hidden="true" class="relative focus:outline-none" x-cloak @click="toggleTheme">
        <div class="transition bg-blue-100 rounded-full outline-none w-14 h-7 dark:bg-blue-400">
        </div>
        <div class="absolute top-0 left-0 inline-flex items-center justify-center w-6 h-6 transition-all duration-150 transform scale-110 rounded-full shadow-sm"
            :class="{ 'translate-x-0 -translate-y-px  bg-white text-blue-700': !isDark, 'translate-x-6 text-blue-100 bg-blue-800': isDark }">
            <svg x-show="!isDark" class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
            </svg>
            <svg x-show="isDark" class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
            </svg>
        </div>
    </button>
    <nav aria-label="Main" class="px-2 py-4 space-y-2">

    </nav>

    {{-- <div class="flex flex-col flex-1 min-h-screen overflow-x-hidden overflow-y-auto">
                        <!-- Navbar -->
                                          <!-- Desktop Right buttons -->
                                                       </div>
                        </header>

                        <!-- Main content -->
                        <div class="flex items-center justify-center flex-1 h-full p-4">
                            <main class="space-y-4">
                                <p class="text-base font-medium">
                                    See full project with all finished pages
                                </p>
                                <div class="space-x-4">
                                    <a href="https://kamona-wd.github.io/kwd-dashboard/" target="_blank"
                                        class="inline-block text-blue-600 hover:underline">Live</a>
                                    <a href="https://github.com/Kamona-WD/kwd-dashboard" target="_blank"
                                        class="inline-block text-blue-600 hover:underline">Github repo</a>
                                </div>
                            </main>
                        </div> --}}

    </div>
    </div>
    </div>

    <script>
        const setup = () => {
            const getTheme = () => {
                if (window.localStorage.getItem('dark')) {
                    return JSON.parse(window.localStorage.getItem('dark'))
                }
                return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
            }

            const setTheme = (value) => {
                window.localStorage.setItem('dark', value)
            }

            return {
                loading: true,
                isDark: getTheme(),
                toggleTheme() {
                    this.isDark = !this.isDark
                    setTheme(this.isDark)
                },
                setLightTheme() {
                    this.isDark = false
                    setTheme(this.isDark)
                },
                setDarkTheme() {
                    this.isDark = true
                    setTheme(this.isDark)
                },

            }
        }
    </script>
    </div>
