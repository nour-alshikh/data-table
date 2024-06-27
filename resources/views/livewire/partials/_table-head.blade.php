 <th scope="col" class="px-4 py-3" wire:click="setSort('{{ $name }}')">
     <button type="button" class="flex items-center">
         {{ $displayName }}

         @if ($sortedBy !== $name)
             <div class="flex flex-col">

                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="size-3 mx-2 text-gray-400 opacity-85">
                     <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                 </svg>

                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="size-3 mx-2 text-gray-400 opacity-85">
                     <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                 </svg>
             </div>
         @else
             @if ($sortedDir === 'DESC')
                 <div class="flex flex-col">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="size-3 mx-2 text-gray-400 opacity-85">
                         <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                     </svg>
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="size-3 mx-2 text-gray-900">
                         <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                     </svg>
                 </div>
             @else
                 <div class="flex flex-col">

                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="size-3 mx-2 text-gray-900">
                         <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                     </svg>

                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="size-3 mx-2 text-gray-400 opacity-85">
                         <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                     </svg>
                 </div>
             @endif
         @endif
     </button>
 </th>
