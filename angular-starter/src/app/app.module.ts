import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { HttpClientModule } from '@angular/common/http';
import { ReactiveFormsModule } from '@angular/forms';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { FriendsComponent } from './friends/friends.component';
import { TopBarComponent } from './top-bar/top-bar.component';
import { ChatBarComponent } from './chat-bar/chat-bar.component';
import { FriendListComponent } from './friend-list/friend-list.component';
import { FriendDetialComponent } from './friend-detial/friend-detial.component';
import { LoginComponent } from './login/login.component';
import { BackendService } from './backend.service'

@NgModule({
  declarations: [
    AppComponent,
    FriendsComponent,
    TopBarComponent,
    ChatBarComponent,
    FriendListComponent,
    FriendDetialComponent,
    LoginComponent
  ],
  imports: [
    BrowserModule,
    HttpClientModule,
    ReactiveFormsModule,
    AppRoutingModule
  ],
  providers: [ BackendService ],
  bootstrap: [ AppComponent ]
})
export class AppModule { }
