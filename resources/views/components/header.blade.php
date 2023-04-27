<header>
    <nav class="bg-purple-200 border-gray-200 dark:bg-gray-900 flex flex-col md:flex-row items-center justify-between px-4 py-2 md:px-8 md:py-4">
      <a href="{{ route('homepage') }}" class="flex items-center text-2xl font-semibold text-gray-900 dark:text-white">
        <span class="self-center font-bold text-xxl">Borrow A Shiver</span>
      </a>
      {{-- Start of navigation links --}}
      <div class="flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-4">
        <a href="{{ route('homepage') }}" class="text-sm text-gray-900 dark:text-white hover:text-purple-900">Home</a>
        <a href="{{ route('books') }}" class="text-sm text-gray-900 dark:text-white hover:text-purple-900">Books</a>
        <a href="{{ route('authors') }}" class="text-sm text-gray-900 dark:text-white hover:text-purple-900">Authors</a>
        
        {{-- Start of admin dashboard --}}
        @if (auth()->check() && auth()->user()->is_admin)
            <a href="{{ route('create-book') }}" class="text-sm text-gray-900 dark:text-white hover:text-purple-900">Add Book</a>
            <a href="{{ route('create-author') }}" class="text-sm text-gray-900 dark:text-white hover:text-purple-900">Add Author</a>
        @endif
        {{-- End of admin dashboard --}}

        {{-- Start of session links --}}
        <div class="flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-4">
          {{-- LOGGED IN --}}
          @auth
          {{-- Welcome user --}}
          <span class="text-sm text-gray-900 dark:text-white">Welcome {{auth()->user()->firstname}}</span>
          {{-- Logout --}}
          <form method="POST" action="/logout">
            @csrf
            <button type="submit" class="inline-block px-4 py-2 bg-purple-900 text-white rounded-md text-sm font-medium hover:bg-purple-700 focus:outline-none focus:bg-purple-700">Log Out</button>
          </form>
          {{-- NOT LOGGED IN --}}
          @else
          {{-- Register link --}}
          <a href="{{ route('register') }}" class="inline-block px-4 py-2 bg-purple-900 text-white rounded-md text-sm font-medium hover:bg-purple-700 focus:outline-none focus:bg-purple-700">Sign Up</a>
          {{-- Login link --}}
          <a href="{{ route('login') }}" class="inline-block px-4 py-2 bg-purple-900 text-white rounded-md text-sm font-medium hover:bg-purple-700 focus:outline-none focus:bg-purple-700">Log In</a>
          @endauth
        </div>
        {{-- End of session links --}}
      </div>
      {{-- End of navigation links --}}
    </nav>
  </header>