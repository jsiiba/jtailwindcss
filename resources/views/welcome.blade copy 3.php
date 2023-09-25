<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />

        <title>Laravel</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        <style>

        </style>

    <!--Main Navigation-->

  <!-- Main navigation container -->
  <nav
    class="flex-no-wrap relative flex min-h-[56px] w-full items-center justify-between bg-white py-2 shadow-md shadow-black/5 dark:bg-neutral-600 dark:shadow-black/10 lg:flex-wrap lg:justify-start lg:py-4"
    data-te-navbar-ref>
    <div class="lg:container mx-auto flex w-full flex-wrap items-center justify-between px-3">
      <!-- Hamburger button for mobile view -->
      <button
        class="block border-0 bg-transparent px-2 text-neutral-500 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden"
        type="button"
        data-te-collapse-init
        data-te-target="#navbarSupportedContent1"
        aria-controls="navbarSupportedContent1"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <!-- Hamburger icon -->
        <span class="[&>svg]:w-7">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="h-7 w-7">
            <path
              fill-rule="evenodd"
              d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
              clip-rule="evenodd" />
          </svg>
        </span>
      </button>

      <!-- Collapsible navigation container -->
      <div
        class="!visible hidden flex-grow basis-[100%] items-center lg:!flex lg:basis-auto"
        id="navbarSupportedContent1"
        data-te-collapse-item>
        <!-- Logo -->
        <a
          class="mb-4 mr-2 mt-3 flex items-center text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:mb-0 lg:mt-0"
          href="#">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="h-6 w-6">
            <path fill-rule="evenodd"
            d="M12.963 2.286a.75.75 0 00-1.071-.136 9.742 9.742 0 00-3.539 6.177A7.547 7.547 0 016.648 6.61a.75.75 0 00-1.152-.082A9 9 0 1015.68 4.534a7.46 7.46 0 01-2.717-2.248zM15.75 14.25a3.75 3.75 0 11-7.313-1.172c.628.465 1.35.81 2.133 1a5.99 5.99 0 011.925-3.545 3.75 3.75 0 013.255 3.717z"
            clip-rule="evenodd" />
        </svg>
        </a>
        <!-- Left navigation links -->
        <ul
          class="list-style-none mr-auto flex flex-col pl-0 lg:flex-row"
          data-te-navbar-nav-ref>
          <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
            <!-- Dashboard link -->
            <a
              class="text-neutral-500 hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-zinc-400"
              href="#"
              data-te-nav-link-ref
              >Dashboard</a
            >
          </li>
          <!-- Team link -->
          <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
            <a
              class="text-neutral-500 hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
              href="#"
              data-te-nav-link-ref
              >Team</a
            >
          </li>
          <!-- Projects link -->
          <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
            <a
              class="text-neutral-500 hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
              href="#"
              data-te-nav-link-ref
              >Projects</a
            >
          </li>
        </ul>
      </div>

      <!-- Right elements -->
      <div class="relative flex items-center">
        <!-- Cart Icon -->
        <a
          class="mr-4 text-neutral-500 hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
          href="#">
          <span class="[&>svg]:w-5">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                <path fill-rule="evenodd" d="M7.84 1.804A1 1 0 018.82 1h2.36a1 1 0 01.98.804l.331 1.652a6.993 6.993 0 011.929 1.115l1.598-.54a1 1 0 011.186.447l1.18 2.044a1 1 0 01-.205 1.251l-1.267 1.113a7.047 7.047 0 010 2.228l1.267 1.113a1 1 0 01.206 1.25l-1.18 2.045a1 1 0 01-1.187.447l-1.598-.54a6.993 6.993 0 01-1.929 1.115l-.33 1.652a1 1 0 01-.98.804H8.82a1 1 0 01-.98-.804l-.331-1.652a6.993 6.993 0 01-1.929-1.115l-1.598.54a1 1 0 01-1.186-.447l-1.18-2.044a1 1 0 01.205-1.251l1.267-1.114a7.05 7.05 0 010-2.227L1.821 7.773a1 1 0 01-.206-1.25l1.18-2.045a1 1 0 011.187-.447l1.598.54A6.993 6.993 0 017.51 3.456l.33-1.652zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
            </svg>

          </span>
        </a>

        <!-- Container with two dropdown menus -->
        <div class="relative" data-te-dropdown-ref>
          <!-- First dropdown trigger -->
          <a
            class="hidden-arrow mr-4 flex items-center text-neutral-500 hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
            href="#"
            id="dropdownMenuButton1"
            role="button"
            data-te-dropdown-toggle-ref
            aria-expanded="false">
            <!-- Dropdown trigger icon -->
            <span class="[&>svg]:w-5">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                <path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                <path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
            </svg>

            </span>
            <!-- Notification counter -->
            <span
              class="absolute -mt-2.5 ml-2 rounded-[0.37rem] bg-danger px-[0.45em] py-[0.2em] text-[0.6rem] leading-none text-white"
              >1</span
            >
          </a>
         
        </div>

        <!-- Second dropdown container -->
        <div class="relative" data-te-dropdown-ref>
          <!-- Second dropdown trigger -->
          <a
            class="hidden-arrow flex items-center whitespace-nowrap transition duration-150 ease-in-out motion-reduce:transition-none"
            href="#"
            id="dropdownMenuButton2"
            role="button"
            data-te-dropdown-toggle-ref
            aria-expanded="false">
            <!-- User avatar -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                <path d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z" />
            </svg>

          </a>
         
        </div>
      </div>
    </div>
  </nav>
<!--Main Navigation-->

    </head>
    <body >
<!-- Start your project here-->

<!--Main layout-->
<main class="pt-5">

<!-- Section: Contact -->
<section class="mb-28">
  <h3
    class="mb-10 text-center text-3xl font-semibold text-gray-700 dark:text-white">
    Contact us
  </h3>

  <div class="grid gap-12 lg:grid-cols-12">
    <!-- First column -->
    <div class="lg:col-span-5">[...]</div>
    <!-- First column -->

    <!-- Second column -->
    <div class="lg:col-span-7">
      <div class="grid gap-12 lg:grid-cols-2">
        <!-- Press -->
        <div class="flex">
          <!-- Badge -->
          <div>
            <span
              class="mr-4 inline-block rounded-lg bg-primary-100 p-4 text-primary-700">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="h-6 w-6">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
              </svg>
            </span>
          </div>

          <!-- Text -->
          <div>
            <p class="mb-2 font-semibold text-gray-700 dark:text-white">
              Press
            </p>
            <p class="text-gray-600 dark:text-gray-400">
              press@example.com
            </p>
            <p class="text-gray-600 dark:text-gray-400">+1 654-234-65</p>
          </div>
        </div>
        <!-- Press -->

        <!-- Sales questions -->
        <div class="flex">
          <!-- Badge -->
          <div>
            <span
              class="mr-4 inline-block rounded-lg bg-primary-100 p-4 text-primary-700">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="h-6 w-6">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </span>
          </div>

          <!-- Text -->
          <div>
            <p class="mb-2 font-semibold text-gray-700 dark:text-white">
              Sales questions
            </p>
            <p class="text-gray-600 dark:text-gray-400">
              sales@example.com
            </p>
            <p class="text-gray-600 dark:text-gray-400">+2 875-345-73</p>
          </div>
        </div>
        <!-- Sales questions -->

        <!-- Technical support -->
        <div class="flex">
          <!-- Badge -->
          <div>
            <span
              class="mr-4 inline-block rounded-lg bg-primary-100 p-4 text-primary-700">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="h-6 w-6">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
              </svg>
            </span>
          </div>

          <!-- Text -->
          <div>
            <p class="mb-2 font-semibold text-gray-700 dark:text-white">
              Technical support
            </p>
            <p class="text-gray-600 dark:text-gray-400">
              support@example.com
            </p>
            <p class="text-gray-600 dark:text-gray-400">+1 234-567-87</p>
          </div>
        </div>
        <!-- Technical support -->

        <!-- Bug report -->
        <div class="flex">
          <!-- Badge -->
          <div>
            <span
              class="mr-4 inline-block rounded-lg bg-primary-100 p-4 text-primary-700">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="h-6 w-6">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M12 12.75c1.148 0 2.278.08 3.383.237 1.037.146 1.866.966 1.866 2.013 0 3.728-2.35 6.75-5.25 6.75S6.75 18.728 6.75 15c0-1.046.83-1.867 1.866-2.013A24.204 24.204 0 0112 12.75zm0 0c2.883 0 5.647.508 8.207 1.44a23.91 23.91 0 01-1.152 6.06M12 12.75c-2.883 0-5.647.508-8.208 1.44.125 2.104.52 4.136 1.153 6.06M12 12.75a2.25 2.25 0 002.248-2.354M12 12.75a2.25 2.25 0 01-2.248-2.354M12 8.25c.995 0 1.971-.08 2.922-.236.403-.066.74-.358.795-.762a3.778 3.778 0 00-.399-2.25M12 8.25c-.995 0-1.97-.08-2.922-.236-.402-.066-.74-.358-.795-.762a3.734 3.734 0 01.4-2.253M12 8.25a2.25 2.25 0 00-2.248 2.146M12 8.25a2.25 2.25 0 012.248 2.146M8.683 5a6.032 6.032 0 01-1.155-1.002c.07-.63.27-1.222.574-1.747m.581 2.749A3.75 3.75 0 0115.318 5m0 0c.427-.283.815-.62 1.155-.999a4.471 4.471 0 00-.575-1.752M4.921 6a24.048 24.048 0 00-.392 3.314c1.668.546 3.416.914 5.223 1.082M19.08 6c.205 1.08.337 2.187.392 3.314a23.882 23.882 0 01-5.223 1.082" />
              </svg>
            </span>
          </div>

          <!-- Text -->
          <div>
            <p class="mb-2 font-semibold text-gray-700 dark:text-white">
              Bug report
            </p>
            <p class="text-gray-600 dark:text-gray-400">bugs@example.com</p>
            <p class="text-gray-600 dark:text-gray-400">+3 735-325-44</p>
          </div>
        </div>
        <!-- Bug report -->
      </div>
    </div>
    <!-- Second column -->
  </div>
</section>
<!-- Section: Contact -->


</main>
<!--Main layout-->

<!--Footer-->
<footer>

  <!-- Copyrights -->
  <div class="bg-neutral-200 p-6 text-center dark:bg-neutral-900">
    <span>© 2023 Copyright:</span>
    <a
      class="font-semibold text-neutral-600 dark:text-neutral-400"
      href="https://tailwind-elements.com/"
      >Tailwind Elements</a
    >
  </div>
  <!-- Copyrights -->
</footer>
<!--Footer-->

    <!-- End your project here-->        

    </body>
</html>
