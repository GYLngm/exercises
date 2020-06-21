import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { FriendDetailComponent } from './friend-detail/friend-detail.component';

const routes: Routes = [
  { path : 'friends/:userId', component: FriendDetailComponent }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
