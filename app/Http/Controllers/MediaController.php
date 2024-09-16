<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Media;

class MediaController extends Controller
{
    public function addMedia()
    {
        return view("content.metode.add_media", [
            "title" => "Tambah Media Pembelajaran",
        ]);
    }

    public function storeMedia(Request $request)
    {
        $request->validate([
            "nama_media" => "required",
        ]);

        Media::create([
            "nama_media" => $request->nama_media,
            "deskripsi_media" => $request->deskripsi_media,
        ]);

        return redirect()
            ->route("kurikulum.data.metode")
            ->with("success", "Media pembelajaran berhasil ditambahkan");
    }

    public function edit($media)
    {
        $media = Media::where("id_media", $media)->first();

        return view("content.metode.edit_media", [
            "title" => "Edit Media Pembelajaran",
            "media" => $media,
        ]);
    }

    public function update($media, Request $request)
    {
        $request->validate([
            "nama_media" => "required",
        ]);

        $media = Media::where("id_media", $media)->first();
        $media->update([
            "nama_media" => $request->nama_media,
            "deskripsi_media" => $request->deskripsi_media,
        ]);

        $media->save();

        return redirect()
            ->route("kurikulum.data.metode")
            ->with("success", "Media pembelajaran berhasil diubah");
    }

    public function delete($media)
    {
        $media = Media::where("id_media", $media)->first();
        $media->delete();

        return redirect()
            ->route("kurikulum.data.metode")
            ->with("success", "Media pembelajaran berhasil dihapus");
    }
}
