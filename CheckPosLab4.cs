using System.Collections;
using System.Collections.Generic;
using System.Threading;
using UnityEngine;
using UnityEngine.UI;
using UnityEngine.SceneManagement;

public class CheckPosLab4 : MonoBehaviour
{


    public GameObject beaker;
    public GameObject burner;
    public GameObject funnel;
    public GameObject tripod_stand;
    public GameObject retord_stand;
    public GameObject wire_gauze;
    public GameObject bowl;
    public GameObject beaker_empty;


    public GameObject copper_sulphate;
    public GameObject copper_sulphate_shadow;
    public GameObject beaker_shadow;
    public GameObject emptybowl;
    public GameObject morewater;
    public GameObject morewater_shadow;
    public GameObject filterpaper;
    public GameObject filterpaper_shadow;
    public GameObject pouring;
    public GameObject rfiltered;
    public GameObject beaker_empty_shadow;
    public GameObject rfiltered_shadow;
    public GameObject pouring_2;
    public GameObject fireanimation;
    public GameObject bowl_shadow2;
    public GameObject paper;
    public GameObject bowl_shadow;
    public GameObject emptyyellowbowl;
    public GameObject crystal;

    public  GameObject arrow_down;
    public  GameObject arrow_down2;
    public  GameObject arrow_down3;
    public  GameObject arrow_down4;
    public  GameObject arrow_down5;
    public  GameObject arrow_down6;
    public  GameObject arrow_down7;
    public  GameObject arrow_down8;
      
   
    

      

    // public Text text_obj1;
    // public Text text_obj2;
    // public Text text_obj3;
    // public Text text_obj4;
    // public Text text_obj6;
    // public Text text_obj7;
    // public Text text_obj8;

    



    public int c = 0;
    public bool flag;



    float currentTime = 0f;
    float startingTime = 10f;


    [SerializeField] Text countdownText;



    void OnMouseDown(){
            if(transform.position.x==-8.19f){
                if(Input.GetMouseButtonDown(0) && fireanimation.activeInHierarchy){
                    fireanimation.SetActive(false);
                    //    text_obj7.gameObject.SetActive(false);
                    //     text_obj8.gameObject.SetActive(true);

                }
          
                else{
                    fireanimation.SetActive(true);


                    
                   
                    

                }
        
        }
    }


    // Start is called before the first frame update
    void Start()
    {

    currentTime = startingTime;
     c+=1;


     


    }

    

    // Update is called once per frame
    void Update()
    {

      

        float posBurner = burner.transform.position.x;
        float posBeaker = beaker.transform.position.x;
        float posTripod_stand = tripod_stand.transform.position.x;
        float posRetord_stand = retord_stand.transform.position.x;
        float posWire_gauze = wire_gauze.transform.position.x;
        float posBowl = bowl.transform.position.x;
        float posFunnel = funnel.transform.position.x;
        float posBeaker_empty = beaker_empty.transform.position.x;
        
        float posCopperSulphate = copper_sulphate.transform.position.x;
        float posFilterPaper = filterpaper.transform.position.x;
        float posMoreWater = morewater.transform.position.x;
        float posRfiltered = rfiltered.transform.position.x;



        if(posBowl==1.11f){
            // text_obj8.gameObject.SetActive(false);
            bowl.SetActive(false);
            bowl_shadow2.SetActive(false);
            emptyyellowbowl.SetActive(true);
            crystal.SetActive(true);
                            
                        }


    //      if(c<=1){
         
        
        
    //   //   Destroy(burner.GetComponent<ChangeSizeBurnerLab1>());
    //     //Destroy(burner.GetComponent<BoxCollider2D>());
    //     Destroy(rod.GetComponent<ChangeSizeRod>());
    //     Destroy(rod.GetComponent<BoxCollider2D>());

      
    //      if(posBurner==-3.01f){

    //        rod.AddComponent<ChangeSizeRod>();
    //        rod.AddComponent<BoxCollider2D>();
    //        arrow_down.SetActive(false);
    //        arrow_down2.SetActive(true);

    //      }

    //      if(posRod==-3.15f){
    //         arrow_down2.SetActive(false);
    //         tick.SetActive(true);
    //         text_obj2.gameObject.SetActive(true);
    //      }




    //     }
//Debug.Log(posRetord_stand);
      
                if(posBurner==-8.19f && posBeaker==-5.2f && posBeaker_empty==-1.03f && posBowl==-8.11f && posFunnel==-1.04f && posWire_gauze==-8.21f && posTripod_stand==-8.24f && posFilterPaper==-1.04f){// && posRetord_stand==-1.87f){
                    //   tick.SetActive(true);
                    //   text_burner.gameObject.SetActive(true);
                    //   c+=1;
                      
                    //      arrow_down.SetActive(false);
                    //       arrow_down2.SetActive(false);

                    //     arrow_down3.SetActive(false);
                    //     arrow_down4.SetActive(false);
                    //     arrow_down5.SetActive(false);
                    //     arrow_down6.SetActive(false);
                    //     arrow_down7.SetActive(false);
                 
                    Debug.Log("Condition Met");
                    // text_obj1.gameObject.SetActive(false);
                    // text_obj2.gameObject.SetActive(true);
                    copper_sulphate_shadow.SetActive(true);
                    copper_sulphate.SetActive(true);
                    
                    if(posCopperSulphate==-4.54f){
                        // text_obj2.gameObject.SetActive(false);
                        // text_obj3.gameObject.SetActive(true);
                        copper_sulphate.SetActive(false);
                        copper_sulphate_shadow.SetActive(false);
                        emptybowl.SetActive(true);
                        beaker.SetActive(false);
                        beaker_shadow.SetActive(false);
                        morewater.SetActive(true);
                        morewater_shadow.SetActive(true);
                        if (posMoreWater==1){
                            // text_obj3.gameObject.SetActive(false);
                            // text_obj4.gameObject.SetActive(true);
                            morewater.SetActive(false);
                            morewater_shadow.SetActive(false);
                            pouring.SetActive(true);
                            beaker_empty.SetActive(false);
                            beaker_empty_shadow.SetActive(false);
                            rfiltered.SetActive(true);
                            rfiltered_shadow.SetActive(true);
                            emptybowl.SetActive(false);
                            if(posRfiltered==-6.4f){
                                // text_obj4.gameObject.SetActive(false);
                                // text_obj6.gameObject.SetActive(true);
                                pouring.SetActive(false);
                                rfiltered.SetActive(false);
                                rfiltered_shadow.SetActive(false);
                                pouring_2.SetActive(true);





                                if(fireanimation.activeInHierarchy==true){

                                    countdownText.gameObject.SetActive(true);

                                    currentTime -= 1 * Time.deltaTime;
                                    countdownText.text = currentTime.ToString("0");
                                    

                                if(currentTime <= 3){
                                    countdownText.color = Color.red;
                                }


                                if(currentTime <= 0){
                                    // text_obj6.gameObject.SetActive(false);
                                    // text_obj7.gameObject.SetActive(true);
                                    currentTime = 0;
                                    countdownText.gameObject.SetActive(false);
                                    bowl_shadow.SetActive(false);
                                    bowl_shadow2.SetActive(true);
                                    paper.SetActive(true);
                              
                                    
                                  


                                }

                                 }
                             
                            
                            }

                           
                        }
                 
                        

                    }
         

                
                  
}
    



                
                
        }



    

       


}







            

