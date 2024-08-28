<?php

namespace App\Filament\Pages;

use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Forms\Components;
use Filament\Pages\Page;
use Filament\Support\Colors\Color;

class Halaman extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.halaman';

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Components\Section::make('Hero')
                    ->collapsible()
                    ->columns(2)
                    ->schema([
                        Components\TextInput::make('judul')
                            ->required(),
                        Components\TextInput::make('subjudul')
                            ->required(),
                        Components\FileUpload::make('gambar')
                            ->columnSpanFull()
                            ->image()
                            ->multiple()
                            ->imageCropAspectRatio('1:1')
                    ]),
                Components\Section::make('About')
                    ->collapsible()
                    ->columns(2)
                    ->schema([
                        Components\TextInput::make('judul')
                            ->required(),
                        Components\TextInput::make('subjudul')
                            ->required(),
                        Components\Tabs::make('Products')
                            ->columnSpanFull()
                            ->schema([
                                Components\Tabs\Tab::make('Tahun')
                                    ->schema([
                                        Components\TextInput::make('jumlah')
                                            ->required(),
                                        Components\FileUpload::make('gambar')
                                            ->image()
                                            ->required(),
                                    ]),
                                Components\Tabs\Tab::make('Cabang')
                                    ->schema([
                                        Components\TextInput::make('jumlah')
                                            ->required(),
                                        Components\FileUpload::make('gambar')
                                            ->image()
                                            ->required(),
                                    ]),
                                Components\Tabs\Tab::make('Team')
                                    ->schema([
                                        Components\TextInput::make('jumlah')
                                            ->required(),
                                        Components\FileUpload::make('gambar')
                                            ->image()
                                            ->required(),
                                    ]),
                            ]),
                    ]),
                Components\Section::make('Product')
                    ->collapsible()
                    ->columns(2)
                    ->schema([
                        Components\TextInput::make('judul')
                            ->required(),
                        Components\TextInput::make('subjudul')
                            ->required(),
                        Components\FileUpload::make('katalog_produk')
                            ->columnSpanFull()
                            ->required(),
                        Components\Tabs::make('Products')
                            ->columnSpanFull()
                            ->schema([
                                Components\Tabs\Tab::make('Produk 1')
                                    ->schema([
                                        Components\TextInput::make('nama')
                                            ->required(),
                                        Components\FileUpload::make('gambar')
                                            ->image()
                                            ->required(),
                                    ]),
                                Components\Tabs\Tab::make('Produk 2')
                                    ->schema([
                                        Components\TextInput::make('nama')
                                            ->required(),
                                        Components\FileUpload::make('gambar')
                                            ->image()
                                            ->required(),
                                    ]),
                                Components\Tabs\Tab::make('Produk 3')
                                    ->schema([
                                        Components\TextInput::make('nama')
                                            ->required(),
                                        Components\FileUpload::make('gambar')
                                            ->image()
                                            ->required(),
                                    ]),
                            ])
                    ]),
                Components\Section::make('Contact')
                    ->collapsible()
                    ->schema([
                        Components\Fieldset::make('Jadwal')
                            ->columns(3)
                            ->schema([
                                Components\TimePicker::make('buka')->seconds(false),
                                Components\TimePicker::make('tutup')->seconds(false),
                                Components\Select::make('hari')
                                    ->multiple()
                                    ->options([
                                        'senin' => 'Senin',
                                        'selasa' => 'Selasa',
                                        'rabu' => 'Rabu',
                                        'kamis' => 'Kamis',
                                        'jumat' => 'Jumat',
                                        'sabtu' => 'Sabtu',
                                        'minggu' => 'Minggu'
                                    ]),
                            ]),
                        Components\TextInput::make('telp')
                            ->prefixIcon('bi-telephone-fill')
                            ->required(),
                        Components\Textarea::make('alamat')
                            ->required(),
                        Components\TextInput::make('google_maps')
                            ->url()
                            ->required(),
                        Components\Fieldset::make('socials')
                            ->schema([
                                Components\TextInput::make('whatsapp')->prefixIcon('bi-whatsapp')->prefixIconColor(Color::hex('#4dc95e'))->required(),
                                Components\TextInput::make('facebok')->prefixIcon('bi-facebook')->prefixIconColor(Color::hex('#3269fe')),
                                Components\TextInput::make('instagram')->prefixIcon('bi-instagram')->prefixIconColor(Color::hex('#c41e81')),
                                Components\TextInput::make('twitter')->prefixIcon('bi-twitter')->prefixIconColor(Color::hex('#40a6e7')),
                            ]),
                    ]),


                // ...
            ])
            ->statePath('data');
    }

    public function create(): void
    {
        dd($this->form->getState());
    }
}
