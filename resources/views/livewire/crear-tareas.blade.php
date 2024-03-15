<div>
    <button wire:click="$set('modal',true)" class=" rounded-xl border-none bg-green-300 px-4 py-2 ml-4 hover:bg-green-400">
        Registrar nueva tarea
    </button>

    
    <x-dialog-modal wire:model="modal">
        <x-slot name="title">
            Registrar nueva tarea
        </x-slot>
    
        <x-slot name="content">
            <div class="mt-4">
                <x-label value="¿Qué fecha realizará la terea?"/>
                <x-input type="date" class="w-full" required="true" wire:model="fecha"/>
                <x-input-error for="fecha"/>
            </div>
            <div class="mt-4">
                <x-label value="Describa brevemente la tarea"/>
                <x-input type="text" class="w-full" required="true" wire:model="descripcion"/>
                <x-input-error for="fecha"/>
            </div >           
        </x-slot>
    
        <x-slot name="footer">
            <x-secondary-button wire:click="registrar" >
                Registrar tarea
            </x-secondary-button>
            <x-danger-button wire:click="$set('modal',false)" class="ml-4" >
                cancelar registro
            </x-danger-button>
        </x-slot>
    </x-dialog-modal>

</div>
