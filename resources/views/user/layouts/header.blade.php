
		<!-- header -->
		<header class="w-full px-6 bg-white">
			<div class="container mx-auto max-w-4xl md:flex justify-between items-center">
			<div class="-m-2 text-center">
				<div class="-mb-px flex justify-center">
					<a class="no-underline text-teal-dark border-b-2 border-teal-dark uppercase tracking-wide font-bold text-xs py-3 mr-8"
                    href="{{route('logout') }}" onclick="event.preventDefault();document.
                    getElementById('logout-form').submit();">Sign Up</a>
                    <form action="{{route('logout')}}" id="logout-form" method="POST">@csrf</form>
				</div>
			</div>


					<div class="inline-flex items-center bg-white leading-none text-green-600 rounded-full p-2 shadow text-sm">
						<span class="inline-flex bg-pink-600 text-white rounded-full h-6 px-3 justify-center items-center">Adresse</span>
					<span class="inline-flex px-2">{{Auth::user()->adresse}}</span>

				  </div>

                  <div class="inline-flex items-center bg-white leading-none text-green-600 rounded-full p-2 shadow text-sm">
					<span class="inline-flex bg-indigo-900 text-white rounded-full h-6 px-3 justify-center items-center">Gender</span>
					<span class="inline-flex px-2">{{Auth::user()->sexe}}</span>
				</div>
				  <div class="inline-flex items-center bg-white leading-none text-green-600 rounded-full p-2 shadow text-sm">
					<span class="inline-flex bg-purple-600 text-white rounded-full h-6 px-3 justify-center items-center text-">email</span>
					<span class="inline-flex px-2">{{Auth::user()->email}}</span>
				</div>
                <div class="inline-flex items-center bg-white leading-none text-green-600 rounded-full p-2 shadow text-sm">
                    <span class="inline-flex bg-pink-600 text-white rounded-full h-6 px-3 justify-center items-center">ville</span>
                <span class="inline-flex px-2">{{Auth::user()->ville}}</span>

              </div>
				<div class="inline-flex items-center bg-white leading-none text-green-600 rounded-full p-2 shadow text-sm">
					<span class="inline-flex bg-indigo-900 text-white rounded-full h-6 px-3 justify-center items-center">tel</span>
					<span class="inline-flex px-2">{{Auth::user()->tel}}</span>
				</div>

                <div class="inline-flex items-center bg-white leading-none text-green-600 rounded-full p-2 shadow text-sm">
					<span class="inline-flex bg-purple-600 text-white rounded-full h-6 px-3 justify-center items-center text-">name</span>
					<span class="inline-flex px-2">{{Auth::user()->name}}</span>
				</div>
				</div>



		</header>
		<!-- /header -->
