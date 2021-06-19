<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithPagination;

class ShowEvents extends Component
{
    use WithPagination;

    public $title = '';
    public $description = '';
    public $date_from = '';
    public $isModalOpen = false;
    public $isDeleteModalOpen = false;
    public ?Event $selectedEvent = null;

    protected $rules = [
        'title' => 'required|min:2',
        'description' => 'nullable',
        'date_from' => 'required|date'
    ];

    protected $listeners = ['openNewEventModal' => 'openNewEvent'];

    public function openDeleteEvent(Event $event)
    {
        $this->selectedEvent = $event;
        $this->isDeleteModalOpen = true;
    }

    public function openEditEvent(Event $event)
    {
        $this->selectedEvent = $event;
        $this->title = $event->title;
        $this->description = $event->description;
        $this->date_from = $event->date_from->format('Y-m-d\TH:i');
        $this->isModalOpen = true;
        $this->resetValidation();
    }

    public function openNewEvent()
    {
        $this->reset();
        $this->resetValidation();
        $this->isModalOpen = true;
    }

    public function closeModal()
    {
        $this->isModalOpen = false;
        $this->isDeleteModalOpen = false;
        $this->resetValidation();
        $this->reset();
    }

    public function onSubmit()
    {
        $data = $this->validate();

        if (!empty($this->selectedEvent)) {
            $this->selectedEvent->update($data);
        } else {
            Event::create($data);
        }

        $this->closeModal();
    }

    public function onDelete()
    {
        if (!empty($this->selectedEvent)) {
            $this->selectedEvent->delete();
        }

        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.show-events', [
            'events' => Event::paginate(20),
        ]);
    }
}
