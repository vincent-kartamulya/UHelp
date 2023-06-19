<div id="row-data{{$certificate->id}}" class="w-full">
    <div id="the-data" class="flex flex-row text-dark-blue-new text-opacity-70 font-normal text-[1.042vw] my-[0.521vw] items-center">
        <div class="flex justify-center items-center w-[3.125vw]">
            <input id="default-checkbox" type="checkbox" value="{{$certificate->id}}" class="w-[1.042vw] h-[1.042vw] text-green-new border-green-new rounded focus:ring-green-new focus:ring-1 hover:bg-green-new transition duration-200 ease-in-out">
        </div>
        <p id='participant-number' class="w-[5.208vw] participant-number"> {{ str_pad($i++, 3, '0', STR_PAD_LEFT) }} </p>
        <p class="w-[33.854vw] participant-name">{{$certificate->recipient->name}}</p>
        <p class="w-[10.417vw] participant-position">{{$certificate->recipient->position}}</p>
        <p class="w-[29.167vw] participant-email">{{$certificate->recipient->email}}</p>
        <div class="flex justify-center items-center w-[3.125vw]">
            <button id="update-certificate" value="{{$certificate}}" data-modal-target="popup-modal-update1" data-modal-toggle="popup-modal-update1" type="button" class="hover:bg-yellow-400 hover:bg-opacity-30 rounded-[0.417vw] p-[0.208vw] transition duration-200 ease-in-out">
                <svg class="p-[0.104vw]" xmlns="http://www.w3.org/2000/svg" width="1.458vw" height="1.458vw" viewBox="0 0 24 24"><rect x="0" y="0" width="24" height="24" fill="none" stroke="none" /><path fill="#3F487F" d="M5 23.7q-.825 0-1.413-.587T3 21.7v-14q0-.825.588-1.413T5 5.7h8.925l-2 2H5v14h14v-6.95l2-2v8.95q0 .825-.588 1.413T19 23.7H5Zm7-9Zm4.175-8.425l1.425 1.4l-6.6 6.6V15.7h1.4l6.625-6.625l1.425 1.4l-6.625 6.625q-.275.275-.638.438t-.762.162H10q-.425 0-.713-.288T9 16.7v-2.425q0-.4.15-.763t.425-.637l6.6-6.6Zm4.275 4.2l-4.275-4.2l2.5-2.5q.6-.6 1.438-.6t1.412.6l1.4 1.425q.575.575.575 1.4T22.925 8l-2.475 2.475Z"/></svg>
            </button>
        </div>
    </div>
    <div class="border-[0.052vw] border-yellow-new"></div>
</div>
