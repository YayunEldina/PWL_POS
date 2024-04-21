<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StokModel extends Model
{
    use HasFactory;
    protected $table = "t_stoks";
    protected $primaryKey = "stok_id";
    // protected $fillable = ['stok_id', 'barang_id', 'user_id', 'stok_tanggal', 'stok_jumlah'];
    protected $fillable = ['stok_id', 'barang_nama', 'user_nama', 'stok_tanggal', 'stok_jumlah'];
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(UserModel::class, 'user_id', 'user_id');
    }

    public function barang(): BelongsTo
    {
        return $this->belongsTo(BarangModel::class, 'barang_id', 'barang_id');
    }
}
