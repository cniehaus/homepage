<?php snippet('header'); ?>

<!-- Page Container -->
<div
  x-data="{ userDropdownOpen: false, mobileNavOpen: false, sideContentOpen: false }"
  id="page-container"
  class="mx-auto flex min-h-dvh w-full min-w-80 flex-col bg-gray-100 dark:bg-gray-800/50 dark:text-gray-100">


  <!-- Page Content -->
  <main id="page-content" class="flex max-w-full flex-auto flex-col">
    <!-- Page Heading -->
    <div class="h-48 bg-gray-800 text-gray-100">
      <div class="container mx-auto px-4 lg:px-8 xl:max-w-7xl">
        <div class="flex items-center border-t border-gray-700 py-4">
          <div class="grow">

            <h1 class="text-2xl font-semibold">Overview</h1>
          </div>
          <div
            class="flex flex-none items-center justify-center gap-2 rounded-sm py-3 pl-2 sm:justify-end sm:bg-transparent">


            <!-- Toggle Side Content on Mobile -->
            <div class="lg:hidden">
              <button
                x-on:click="sideContentOpen = !sideContentOpen"
                type="button"
                class="inline-flex items-center justify-center gap-2 rounded-lg border border-indigo-700 bg-indigo-700 px-3 py-2 text-sm leading-5 font-semibold text-white hover:border-indigo-600 hover:bg-indigo-600 hover:text-white focus:ring-3 focus:ring-indigo-400/90 active:border-indigo-700 active:bg-indigo-700">
                <svg
                  class="hi-mini hi-bars-3-bottom-right inline-block size-5"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                  aria-hidden="true">
                  <path
                    fill-rule="evenodd"
                    d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm7 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"
                    clip-rule="evenodd" />
                </svg>
              </button>
            </div>
            <!-- END Toggle Side Content on Mobile -->
          </div>
        </div>
      </div>
    </div>
    <!-- END Page Heading -->

    <!-- Page Section -->
    <div class="container mx-auto -mt-28 p-4 lg:-mt-32 lg:p-8 xl:max-w-7xl">
      <div class="grid grid-cols-1 gap-4 lg:grid-cols-12 lg:gap-6">

        <?php snippet('box-notfall'); ?>


        <!-- Main Content -->
        <div
          class="order-last rounded-lg bg-white p-5 shadow-xs lg:order-first lg:col-span-8 lg:p-6 dark:bg-gray-900">


          <!-- Placeholder -->
          <?php snippet('box-fokus'); ?>
          <?php snippet('box-blogs'); ?>

          <!--

          ADD YOUR MAIN CONTENT ABOVE
              
          -->
        </div>
        <!-- END Main Content -->

        <!-- Side content -->
        <div
          x-cloak
          x-bind:class="{ 'hidden': ! sideContentOpen }"
          class="order-first rounded-lg bg-white p-5 shadow-xs lg:order-last lg:col-span-4 lg:block lg:p-6 dark:bg-gray-900">
          <!--

          ADD YOUR SIDE CONTENT BELOW

          -->

          <!-- Placeholder -->

          <?php snippet('box-kalender'); ?>
          <?php snippet('box-presse'); ?>

          <!--

          ADD YOUR SIDE CONTENT ABOVE
              
          -->
        </div>
        <!-- END Side content -->
      </div>
    </div>
    <!-- END Page Section -->
  </main>
  <!-- END Page Content -->

  <!-- Page Footer -->
  <?php snippet('footertw'); ?>

  <!-- END Page Footer -->
</div>
<!-- END Page Container -->