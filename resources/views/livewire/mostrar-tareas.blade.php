<div>  
    <div class="border border-slate-300 px-2 py-2 rounded-xl">
        <div class="flex items-center">
            <x-input type="text" wire:model.live='busqueda' class="flex-1" aria-placeholder="Escriba la tarea que busca"/>
            @livewire('crear-tareas')
        </div>
       
       
       @if($tareas->count())

       <table class=" container mx-auto min-w-full divide-y divide-gray-200">
       <thead>
           <tr>
               <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">id</th>
               <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">fecha</th>
               <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">descripcion
               </th>
               <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
           </tr>
       </thead>
       <tbody class="bg-white divide-y divide-gray-200">
           @foreach ($tareas as $tarea)
               <tr>
                   <td class="px-6 py-4 whitespace-nowrap">{{$tarea->id}}</td>
                   <td class="px-6 py-4 whitespace-nowrap">{{$tarea->fecha}}</td>
                   <td class="px-6 py-4 whitespace-nowrap">{{$tarea->descripcion}}</td>

                   <td class="px-6 py-4 whitespace-nowrap">
                       <button
                           class="ml-2 px-4 py-2 font-medium text-white bg-red-600 rounded-md hover:bg-red-500 focus:outline-none focus:shadow-outline-red active:bg-red-600 transition duration-150 ease-in-out">Delete</button>
                   </td>
               </tr>
           @endforeach


       </tbody>
       </table>
   @else
       <div class="px-6 py-6">
           No existen tareas
       </div>
   @endif
    </div>
    

    

</div>
