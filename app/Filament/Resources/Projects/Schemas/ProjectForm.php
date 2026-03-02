<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Repeater;     // Repeater eklendi
use Filament\Forms\Components\FileUpload;   // FileUpload eklendi
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                Textarea::make('description')
                    ->columnSpanFull(),

                // İLİŞKİLİ TABLO İÇİN REPEATER BÖLÜMÜ
                Repeater::make('images')
                    ->relationship() // Project modelindeki 'images()' metodunu otomatik tanır
                    ->schema([
                        FileUpload::make('image_path')
                            ->image()
                            ->disk('public')
                            ->directory('projects') // Resimleri 'storage/app/public/projects' içine kaydeder
                            ->required()
                            ->columnSpanFull(),
                    ])
                    ->grid(3) // Yükleme kutularını yan yana 3'lü kolon yapar (daha şık durur)
                    ->columnSpanFull()
                    ->addActionLabel('Yeni Resim Ekle')
                    ->reorderable(false), // Eğer sıralama özelliği kurmadıysak şimdilik kapalı kalması iyidir
            ]);
    }
}
