<?php

namespace App\Filament\Resources\Blogs\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class BlogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                FileUpload::make('image')
                    ->disk('public')
                    ->directory('blog-image'),
                Textarea::make('content')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('meta_description'),
                TextInput::make('reading_time')
                    ->required()
                    ->numeric()
                    ->default(5),
                TextInput::make('url'),
                Toggle::make('is_published')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
