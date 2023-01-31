<div class="intro-x dropdown w-8 h-8">
    <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button"
        aria-expanded="false" data-tw-toggle="dropdown">
        <img alt="Midone - HTML Admin Template" src="dist/images/profile-5.jpg">
    </div>
    <div class="dropdown-menu w-56">
        <ul class="dropdown-content bg-primary text-white">
            <li class="p-2">
                <div class="font-medium">{{ Auth::user()->name }}</div>
                <div class="text-xs text-white/70 mt-0.5 dark:text-slate-500">{{ Auth::user()->email }}</div>
            </li>
            <li>
                <hr class="dropdown-divider border-white/[0.08]">
            </li>
            <li>
                <a href="/profile" class="dropdown-item hover:bg-white/5"> <i data-lucide="user"
                        class="w-4 h-4 mr-2"></i>
                    Profile </a>
            </li>
            <li>
                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="edit" class="w-4 h-4 mr-2"></i>
                    Add Account </a>
            </li>
            <li>
                <hr class="dropdown-divider border-white/[0.08]">
            </li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a :href="route('logout')" class="dropdown-item hover:bg-white/5"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout
                    </a>
                </form>
            </li>
        </ul>
    </div>
</div>