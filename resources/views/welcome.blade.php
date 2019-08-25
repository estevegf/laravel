@extends('layout')

@section('title', 'Home')

@section('content')

    @include('common.banner', ['imageUrl' => $welcomeBanner])

    <div class="container">
        <section>
          <h2>Who am I?</h2>
          <p>
            I am Esteve Genovard Ferriol. I was born in Mallorca, where I spent my childhood. Nowadays, I am a
            computer engineer graduated in La Salle Campus Barcelona, Ramon Llull University, 2014-2018.
          </p>
        </section>
        <section>
          <h3>Experience</h3>
          <div>
            <div class="card l-6">
              <img class="circular" src="/images/experience-esteve.svg" height="120" alt="experience Funitec La Salle"/>
              <div>
                <h4>Intership - Funitec</h4>
                <ul>
                  <li>Direct contact with suppliers of la Salle</li>
                  <li>Electronic university store administration</li>
                  <li>Stock managment</li>
                </ul>
              </div>
            </div>

            <div class="card l-6">
              <img class="circular" src="/images/experience-esteve.svg" height="120" alt="experience Uniks"/>
              <div>
                <h4>Frontend Developer - Uniks</h4>
                <ul>
                  <li>Website developer: www.uniks.com</li>
                  <li>CMS developer</li>
                  <li>Facebook application developer</li>
                </ul>
              </div>
            </div>
          </div>
        </section>
    </div>

    <style>
        .card {
          display: inline-flex;
          width: 100%;
          -webkit-box-align: center;
          align-items: center;
        }

        .circular {
          border-radius: 50%;
          border: 2px solid green;
          margin: 1em 2em 1em 3em;
        }

        @media (max-width: 600px) {
          .circular {
            margin: 1em 2em 1em 0;
          }
        }

        .card ul {
          padding-left: 0;
        }
    </style>

@endsection

