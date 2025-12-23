<x-app-layout>
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            {{-- login --}}
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-4 p-6">
                <div class="p-6 bg-gray-50 border border-gray-200 rounded">
                    <h2 class="text-3xl mb-1 font-bold">Login</h2>
                    <hr>
                    <div class="flex">
                        <div class="flex-grow p-2">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder=".input" class="mb-5 input">
                        </div>
                        <div class="flex-grow p-2">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" placeholder=".input" class="mb-5 input">
                        </div>
                    </div>
                    <div class="flex p-2">
                        <button type="button" class="btn-primary w-full">Login</button>
                    </div>
                </div>
            </div>

            {{-- register --}}
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-4 p-6">
                <div class="p-6 bg-gray-50 border border-gray-200 rounded">
                    <h2 class="text-3xl mb-1 font-bold">Register</h2>
                    <hr>
                    <div class="flex">
                        <div class="flex-grow px-2">
                            <label for="firstname">First Name</label>
                            <input type="text" id="firstname" name="firstname" placeholder="First Name" class="mb-5 input">
                        </div>
                        <div class="flex-grow px-2">
                            <label for="lastname">Last Name</label>
                            <input type="text" id="lastname" name="lastname" placeholder="Last Name" class="mb-5 input">
                        </div>
                    </div>
                    <div class="flex-grow px-2">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email" class="mb-5 input">
                    </div>
                    <div class="flex-grow px-2">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Password" class="mb-5 input">
                    </div>
                    <div class="flex-grow px-2">
                        <label for="confirmpassword">Confirm Password</label>
                        <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password" class="mb-5 input">
                    </div>
                    <div class="flex p-2">
                        <button type="button" class="btn-primary w-full">Register</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- profile --}}
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-4 p-6">
                <div class="p-6 bg-gray-50 border border-gray-200 rounded">
                    <h2 class="text-3xl mb-1 font-bold">Profile</h2>
                    <hr>
                    <div class="flex">
                        <div class="w-1/3 font-semibold">
                            Personal Information
                        </div>
                        <div class="flex-grow px-2">
                            <label for="firstname">First Name</label>
                            <input type="text" id="firstname" name="firstname" placeholder="First Name" class="mb-5 input">
                            <label for="lastname">Last Name</label>
                            <input type="text" id="lastname" name="lastname" placeholder="Last Name" class="mb-5 input">
                            <label for="address">Address</label>
                            <input type="text" id="address" name="address" placeholder="Address" class="mb-5 input">
                            <label for="phone">Phone Number</label>
                            <input type="text" id="phone" name="phone" placeholder="(e.g. 09xxxxxxxxx)" class="mb-5 input">
                        </div>
                    </div>
                    <hr>
                    <div class="flex">
                        <div class="w-1/3 font-semibold">
                            Credentials
                        </div>
                        <div class="flex-grow px-2">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="Email" class="mb-5 input">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" placeholder="Password" class="mb-5 input">
                        </div>
                    </div>
                    <hr>
                    <div class="flex">
                        <div class="w-1/3 font-semibold">
                            Profile Photo
                        </div>
                        <div class="flex flex-grow px-2">
                            <div class="w-1/6">
                                <img src="assets/images/logo-icon.png" class="profile-img w-16 h-16 rounded-full border" alt="profile">
                            </div>
                            <div class="flex-grow">
                                <div class="upload-area mb-5">
                                    <div class="fileIcon">
                                        <i class="fa-regular fa-file"></i>
                                    </div>
                                    <p class="file-tip"><span>Click here</span> to upload your file or drag.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="flex">
                        <div class="w-1/3"></div>
                        <div class="flex-grow px-2">
                            <div class="float-end">
                                <button type="button" class="btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>