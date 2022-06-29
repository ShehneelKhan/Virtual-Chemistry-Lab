using System.Collections;
using System.Collections.Generic;
using System.Threading;
using UnityEngine;
using UnityEngine.UI;
using UnityEngine.SceneManagement;

public class CheckPosLab1p2 : MonoBehaviour
{


    public GameObject tick;
    public GameObject burner;
    public GameObject rod;
    

    public  GameObject arrow_down;
    public  GameObject arrow_down2;

      

    public Text text_obj1;
    public Text text_obj2;
    public string sceneName;
    private Scene currentScene;


    public int c = 0;


    // Start is called before the first frame update
    void Start()
    {


     c+=1;
        // Create a temporary reference to the current scene.
     currentScene = SceneManager.GetActiveScene();
      // Retrieve the name of this scene.
      sceneName = currentScene.name;


     


    }

    // Update is called once per frame
    void Update()
    {

        float posBurner = burner.transform.position.x;
        float posRod = rod.transform.position.x;


         if(c<=1){
         
        
        
      //   Destroy(burner.GetComponent<ChangeSizeBurnerLab1>());
        //Destroy(burner.GetComponent<BoxCollider2D>());
        Destroy(rod.GetComponent<ChangeSizeRod>());
        Destroy(rod.GetComponent<BoxCollider2D>());

      
         if(posBurner==-3.01f){

           rod.AddComponent<ChangeSizeRod>();
           rod.AddComponent<BoxCollider2D>();
           arrow_down.SetActive(false);
           arrow_down2.SetActive(true);

         }

         if(posRod==-3.15f){
            arrow_down2.SetActive(false);
            tick.SetActive(true);
            text_obj2.gameObject.SetActive(true);
         }




        }

      
                
                
        }

       


}

//         if(posBurner == 1.49f){
//                       tick.SetActive(true);
//                       text_burner.gameObject.SetActive(true);
//                       c+=1;
                      
//                          arrow_down.SetActive(false);
//                           arrow_down2.SetActive(false);

//                         arrow_down3.SetActive(false);
//                         arrow_down4.SetActive(false);
//                         arrow_down5.SetActive(false);
//                         arrow_down6.SetActive(false);
//                         arrow_down7.SetActive(false);
                  
         

                
                  
// }





            

