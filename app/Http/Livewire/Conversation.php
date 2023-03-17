<?php

namespace App\Http\Livewire;

use App\Models\Conversation as ModelsConversation;
use App\Models\Message;
use Livewire\Component;

class Conversation extends Component
{
    public ModelsConversation $conversation;
    public string $message = '';
    protected $listeners = ['sent' => '$refresh'];

    public function mount(ModelsConversation $conversation): void
    {
        $this->conversation = $conversation;
    }

    public function sendMessage(): void
    {
        if (strlen(trim($this->message)) !== 0)
        {
            Message::create([
                'user_id' => auth()->user()->id,
                'conversation_id' => $this->conversation->id,
                'content' => $this->message
            ]);

            $this->message='';
            $this->emit('sent');
        }
    }

    public function render()
    {
        return view('livewire.conversation');
    }
}
