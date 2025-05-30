<div>
    <form wire:submit.prevent="submit" class="space-y-4">
        <input type="text" wire:model="full_name" placeholder="Full Name" class="w-full border p-2 rounded">
        @error('full_name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

        <input type="text" wire:model="whatsapp" placeholder="WhatsApp Number" class="w-full border p-2 rounded">
        @error('whatsapp') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

        <input type="email" wire:model="email" placeholder="Email Address" class="w-full border p-2 rounded">
        @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Register</button>
    </form>
</div>
