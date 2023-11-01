<!--Modal-->
<div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

    <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">

        <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
            <x-css-close />
            <span class="text-sm">(Esc)</span>
        </div>

        <!-- Add margin if you want to see some of the overlay behind the modal-->
        <div class="modal-content py-4 text-left px-6">
            <!--Title-->
            <div class="flex justify-between items-center pb-3">
                <p class="text-2xl font-bold">Add artist</p>
                <div class="modal-close cursor-pointer z-50">
                    <x-css-close />
                </div>
            </div>

            <!--Body-->
            <x-form.add_artist />

            <!--Footer-->
            <div class="flex justify-end pt-2">
                <button class="modal-close px-4 bg-green-500 p-3 rounded-lg text-white hover:bg-green-400">Close</button>
            </div>

        </div>
    </div>
</div>

<script>


</script>
