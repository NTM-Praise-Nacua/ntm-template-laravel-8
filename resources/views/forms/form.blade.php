<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="text-3xl mb-1 font-bold">Text Input</h2>
            <hr>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-4">
                <div class="p-6 bg-white border-b border-gray-200">
                    <input type="text" placeholder=".input-sm" class="mb-5 input-sm ">
                    <input type="text" placeholder=".input" class="mb-5 input">
                    <input type="text" placeholder=".input-lg" class="input-lg">
                </div>
            </div>

            <h2 class="text-3xl mb-1 font-bold">Select Inputs</h2>
            <hr>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-4">
                <div class="p-6 bg-white border-b border-gray-200">
                    <select class="select-sm mb-5" name="" id="">
                        <option selected hidden>Select Option</option>
                        <option value="">Test 1</option>
                        <option value="">Test 2</option>
                    </select>
                    <select class="select mb-5" name="" id="">
                        <option selected hidden>Select Option</option>
                        <option value="">Test 1</option>
                        <option value="">Test 2</option>
                    </select>
                    <select class="select-lg" name="" id="">
                        <option selected hidden>Select Option</option>
                        <option value="">Test 1</option>
                        <option value="">Test 2</option>
                    </select>
                </div>
            </div>

            <h2 class="text-3xl mb-1 font-bold">Buttons</h2>
            <hr>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-4">
                <div class="p-6 bg-white border-b border-gray-200">
                    <button type="button" class="btn-primary">Primary</button>
                    <button type="button" class="btn-secondary">Secondary</button>
                    <button type="button" class="btn-success">Success</button>
                    <button type="button" class="btn-warning">Warning</button>
                    <button type="button" class="btn-danger">Danger</button>
                </div>
            </div>
            
            <h2 class="text-3xl mb-1 font-bold">File Input</h2>
            <hr>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-4">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex">
                        <div class="flex-1">
                            <label for="single_file">Single/Multiple File Select - Base</label>
                            <input type="file" name="single_file" id="single_file" class="file-input mb-5" multiple>
                            <label for="single_file">Single/Multiple File Select - Small</label>
                            <input type="file" name="single_file" id="single_file" class="file-input-sm" multiple>
                        </div>
                        <div class="flex-1">
                            <p>Design for drag style file upload</p>
                            <div class="upload-area">
                                <div class="fileIcon">
                                    <i class="fa-regular fa-file"></i>
                                </div>
                                <p class="file-tip"><span>Click here</span> to upload your file or drag.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>