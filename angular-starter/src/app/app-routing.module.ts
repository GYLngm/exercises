import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { FriendDetialComponent } from './friend-detial/friend-detial.component';

const routes: Routes = [
  { path : 'friends/:userId', component: FriendDetialComponent }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
