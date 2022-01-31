
    <form class="flex flex-wrap" id="add_question" method="POST" action="{{route('posts.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
            <p class="text-xl pb-6 flex items-center">
                <i class="fas fa-list mr-3"></i> Question
            </p>
            <div class="leading-loose">
                <div class="p-10 bg-white rounded shadow-xl">
                    <div class="mb-5">
                        <label class="block text-sm text-gray-600" for="qestion">The Question </label>
                        <textarea class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="question" name="question" rows="6" required="" placeholder="Enter the question ..." aria-label="Question" style="margin-top: 0px; margin-bottom: 0px; height: 113px;"></textarea>
                    </div>
                    <div class="mb-5">
                        <h3 class="block text-sm text-gray-600">Select departments</h3>
                        <ul class="flex flex-wrap">
                            
                        </ul>   
                    </div>
                    <div class="mb-5">
                        <ul class="block w-full" x-data="{selected:null}" id="department_list">
                        </ul>
                    </div>
                    <div class="mb-5">
                        <label class="block text-sm text-gray-600" for="name">Topic</label>
                        <select class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="topic" name="topic_id" required="" aria-label="Topic">
                            <option value="">Select topic</option>
                            
                        </select>
                    </div>
                    <div class="mb-5">
                        <label class="block text-sm text-gray-600" for="image">Images (Optional)</label>
                        <div class="form-group" style="margin-bottom: 13px">
                            <style>
label.all-c-image {
    opacity: 0.8;
    transition: all 0.4s;
    -webkit-transition: all 0.4s;
    -moz-transition: all 0.4s;
    -ms-transition: all 0.4s;
    -o-transition: all 0.4s;
}

label.all-c-image:hover {
    opacity: 1;
    transition: all 0.4s;
    -webkit-transition: all 0.4s;
    -moz-transition: all 0.4s;
    -ms-transition: all 0.4s;
    -o-transition: all 0.4s;
}
                            </style>
                            <div class="w-full inline-block text-left contacts_attach">
                                <label id="image_attach1" class="w-16 h-12 inline-block cursor-pointer relative mr-1" style="display: none">
                                    <div class="w-12 h-10 mt-3 rounded-sm bg-cover bg-center"></div>
                                    <span class="absolute right-0 text-xl font-extrabold text-gray-600" data-remove="contacts_attach1">
                                        <img src="{{asset('img/close3.png')}}">
                                    </span>
                                </label>
                                <label id="image_attach2" class="w-16 h-12 inline-block cursor-pointer relative mr-1" style="display: none">
                                    <div class="w-12 h-10 mt-3 rounded-sm bg-cover bg-center"></div>
                                    <span class="absolute right-0 text-xl font-extrabold text-gray-600" data-remove="contacts_attach2">
                                        <img src="{{asset('img/close3.png')}}">
                                    </span>
                                </label>
                                <label id="image_attach3" class="w-16 h-12 inline-block cursor-pointer relative mr-1" style="display: none">
                                    <div class="w-12 h-10 mt-3 rounded-sm bg-cover bg-center"></div>
                                    <span class="absolute right-0 text-xl font-extrabold text-gray-600" data-remove="contacts_attach3">
                                        <img src="{{asset('img/close3.png')}}">
                                    </span>
                                </label>
                                <label for="contacts_attach1" class="w-16 h-12 inline-block cursor-pointer relative mr-1 all-c-image" data-image-input='1'> 
                                    <img class="mt-2 mb-2 w-16 h-12 absolute" src="{{asset('img/camera3.png')}}">
                                </label>
                            </div>
                            <input type="file" name="image[]" data-label="image_attach1" id="contacts_attach1" style="display: none" accept="image/*">
                            <input type="file" name="image[]" data-label="image_attach2" id="contacts_attach2" style="display: none" accept="image/*">
                            <input type="file" name="image[]" data-label="image_attach3" id="contacts_attach3" style="display: none" accept="image/*">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-1/2 mt-6 pl-0 lg:pl-2">
            <p class="text-xl pb-6 flex items-center">
                <i class="fas fa-list mr-3"></i> Options
            </p>
            <div class="leading-loose">
                <div class="p-10 bg-white rounded shadow-xl">
                    <p class="text-lg text-gray-800 font-medium pb-4">Add Options for the question, And select the correct answer</p>
                    <input type="hidden" name="correct_answer" id="correct_answer">
                    <ul class="divide-y divide-gray-300 list-decimal list-inside">
                        <li class="hover:bg-gray-50 cursor-pointer flex">
                            <input type="text" class="w-full" id="enter_option" placeholder="Enter Option ...">
                            <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded rounded-l-none" type="button" id="add_option"><i class="fa fa-plus"></i></button>
                        </li>
                    </ul>
                    <div class="mt-6">
                        <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Create</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
