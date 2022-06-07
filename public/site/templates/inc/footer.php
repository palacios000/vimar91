<script src="<?php echo $config->urls->templates?>js/uikit.min.js"></script>
<script src="<?php echo $config->urls->templates?>js/uikit-icons.min.js"></script>

<!-- Footer container -->
<div class="flex columns-2 flex-col mr-auto px-9 md:px-18 pt-11 pb-14 bg-grigio-footer font-medium">
    <!-- First row -->
    <div class="flex flex-row columns-2 pb-8">
        <div class="font-bold text-lg tracking-widest py-6 w-1/2 uppercase">
            <a class="hover:text-gray-700/70 ease-in-out duration-150" href="#">
                Iscriviti alla nostra newsletter
            </a>
        </div>
        <!-- Email section -->
        <div class="flex flex-row my-3 h-12 text-left border border-black w-2/5">
            <input class="bg-grigio-footer w-full h-full pl-4 flex items-center text-lg tracking-widest hover:bg-white/40 ease-in-out duration-200" type="email" id="email" name="email" placeholder="email">
            <div class="w-16 h-full border  border-l-black hover:bg-gray-500/10 ease-in-out duration-150">
                <button class="w-full h-full flex items-center text-center justify-center " type="submit" class="btn btn-success">
                    <span class="material-symbols-outlined object-center">
                        chevron_right
                    </span>
                </button>
            </div>
        </div>
    </div>
    <!-- Second row -->
    <div class="flex flex-row pt-3 pb-8 text-base">
        <div class="w-1/2 leading-4 tracking-widest object-top">
            <span class="font-bold">VIMAR</span>1991 srl <br> Via per Santhià 8 <br> Carisio (VC) 13040
        </div> 
        <!-- Links section -->
        <div class="columns-2 w-1/3 font-bold leading-4 uppercase">
            <!-- Left links -->
            <div class="w-1/2 mr-14">
                <ul class="">
                    <li>
                        <a class="hover:text-gray-700/70 ease-in-out duration-150 pb-1 block" href="#">Company</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-700/70 ease-in-out duration-150 pb-1 block" href="#">V91</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-700/70 ease-in-out duration-150 pb-1 block" href="#">Stories</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-700/70 ease-in-out duration-150 pb-1 block" href="#">Catalogue</a>
                    </li>
                </ul>
            </div>
            <!-- Right links -->
            <div class="w-1/2">
                <ul class="">
                    <li>
                        <a class="hover:text-gray-700/70 ease-in-out duration-150 pb-1 block" href="#">Resources</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-700/70 ease-in-out duration-150 pb-1 block" href="#">Legal</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-700/70 ease-in-out duration-150 pb-1 block" href="#">Privacy</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-700/70 ease-in-out duration-150 pb-1 block" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <!-- Third row -->
    <div class="flex flex-row text-lg tracking-widest font-bold uppercase">
        <div class="w-1/2">
            <a class="hover:text-gray-700/70 ease-in-out duration-150" href="#">
                Change language to italian
            </a>
        </div>
        <div class="text-right pb-2 ml-auto w-1/2">
            <a class="hover:text-gray-700/70 ease-in-out duration-150" href="#">
                Social
            </a>
        </div>
    </div>

</div>