% Gejala untuk memilih gadget
pemilihan(butuh_kinerja_tinggi).
pemilihan(butuh_daya_tahan_baterai_lama).
pemilihan(butuh_kualitas_kamera_bagus).
pemilihan(butuh_layar_besar).
pemilihan(butuh_harga_terjangkau).
pemilihan(butuh_penyimpanan_besar).
pemilihan(butuh_konektivitas_5G).
pemilihan(butuh_ponsel_ringan).
pemilihan(butuh_penggunaan_multimedia).
pemilihan(butuh_pelindung_gorilla_glass).
pemilihan(butuh_pemindai_sidik_jari).

% Rules pemilihan gadget
gadget(high_end_smartphone) :- pemilihan(butuh_kinerja_tinggi),
                               pemilihan(butuh_kualitas_kamera_bagus),
                               pemilihan(butuh_layar_besar),
                               pemilihan(butuh_konektivitas_5G),
                               pemilihan(butuh_pelindung_gorilla_glass).

gadget(budget_smartphone) :-  pemilihan(butuh_harga_terjangkau),
                              pemilihan(butuh_kinerja_tinggi),
                              pemilihan(butuh_daya_tahan_baterai_lama),
                              pemilihan(butuh_layar_besar).

gadget(camera_phone) :-       pemilihan(butuh_kualitas_kamera_bagus),
                              pemilihan(butuh_layar_besar),
                              pemilihan(butuh_penyimpanan_besar),
                              pemilihan(butuh_pemindai_sidik_jari).

gadget(battery_life_phone) :- pemilihan(butuh_daya_tahan_baterai_lama),
                              pemilihan(butuh_ponsel_ringan),
                              pemilihan(butuh_penggunaan_multimedia).


gadget(5g_phone) :-           pemilihan(butuh_konektivitas_5G),
                              pemilihan(butuh_kinerja_tinggi),
                              pemilihan(butuh_layar_besar).


gadget(multimedia_phone) :-   pemilihan(butuh_penggunaan_multimedia),
                              pemilihan(butuh_layar_besar),
                              pemilihan(butuh_penyimpanan_besar).