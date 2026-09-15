<section id="contact" class="section contact shell">
  <div class="contact-info"><x-section-heading eyebrow="Come say hello" title="Let’s Begin With <em>Your Story</em>" copy="Tell us a little about the day you are dreaming of." />
    <address><a href="https://wa.me/{{ $site['brand']['whatsapp'] }}" target="_blank" rel="noopener"><i data-lucide="message-circle"></i><span><small>WhatsApp</small>+{{ $site['brand']['whatsapp'] }}</span></a><a href="{{ $site['brand']['instagram'] }}" target="_blank" rel="noopener"><i data-lucide="instagram"></i><span><small>Instagram</small>@winataorganizer</span></a><a href="{{ $site['brand']['maps'] }}" target="_blank" rel="noopener"><i data-lucide="map-pin"></i><span><small>Based in</small>{{ $site['brand']['location'] }}</span></a>
      <div><i data-lucide="clock-3"></i><span><small>Office hours</small>{{ $site['brand']['hours'] }}</span></div>
    </address>
  </div>
  <form class="consultation-form" data-consultation-form data-whatsapp="{{ $site['brand']['whatsapp'] }}">
    <p class="form-label">Schedule Consultation</p>
    <div class="field-row"><label>Nama<input name="name" type="text" required placeholder="Nama Anda"></label><label>WhatsApp<input name="whatsapp" type="tel" required placeholder="08xx xxxx xxxx"></label></div>
    <div class="field-row"><label>Wedding Date<input name="date" type="date"></label><label>Estimated Guests<select name="guests">
          <option value="">Pilih estimasi</option>
          <option>&lt; 100 tamu</option>
          <option>100 - 300 tamu</option>
          <option>300 - 500 tamu</option>
          <option>500+ tamu</option>
        </select></label></div><label>Venue<input name="venue" type="text" placeholder="Lokasi atau area yang dipertimbangkan"></label><label>Message<textarea name="message" rows="3" placeholder="Ceritakan gambaran pernikahan Anda"></textarea></label><button class="button button--dark" type="submit">Kirim & Lanjut WhatsApp <i data-lucide="arrow-up-right"></i></button>
    <p class="form-footnote">Untuk demo ini, formulir akan membuka WhatsApp dan tidak menyimpan data.</p>
  </form>
</section>